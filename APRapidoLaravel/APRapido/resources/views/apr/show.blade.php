@extends('layout.app')


@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h1><p class="font-weight-bold">ID: {{$data['apr']->id}} <br>
		ITEM: {{$data['apr']->nome}} <br>
		EMPRESA: {{$data['empresa']->empresa}} <br>
		{{$data['user']}}
		USER: <br>
		SESMT: {{$data['sesmt']->nome}} <br>
		COORDENA: {{$data['coordena']->nome}} <br>
		AREA: {{$data['area']->nome}} <br>
		NATUREZA RISCOS:
		@foreach($data['naturezariscos'] as $nr)
			<li>{{$nr->natureza_risco}}</li>
		@endforeach
		ATIVIDADES:
		@foreach($data['atividade'] as $at)
			<li>{{$at->atividade}}</li>
		@endforeach
		CHECKLIST:
		@foreach($data['checklist'] as $cl)
			@if($cl->pivot->checado == 1)
				<?php
					$checado = 'sim';
				?>
			@else
				<?php
					$checado = 'não';
				?>
			@endif
			<li>{{$cl->item}}:{{$checado}}</li>
		@endforeach

		</p></h1><br>
	    <div class="float-right">
			<a href="/apr/{{$data['apr']->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['AprController@destroy', $data['apr']->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
    </div>
@endsection