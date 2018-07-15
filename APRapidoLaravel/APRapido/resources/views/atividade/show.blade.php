@extends('layout.app')


@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h1><p class="font-weight-bold">ID: {{$data['atividade']->id}} <br>
		ITEM: {{$data['atividade']->atividade}} <br>
		EMPRESA: {{$data['empresa']->empresa}} <br>
		DISCIPLINA: {{$data['disciplina']->disciplina}} <br>
		@foreach($data['ferramenta']->riscos_medidaspreventivas as $mp)
			<li>{{$riscos->medidas_}}</li>
		@endforeach
		</p></h1><br>
	    <div class="float-right">
		    <a href="/riscos/{{$riscos->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['riscosController@destroy', $riscos->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
    </div>
@endsection