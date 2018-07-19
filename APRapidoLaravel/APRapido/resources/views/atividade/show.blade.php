@extends('layout.app')


@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h2><p class="font-weight-bold">ID: {{$data['atividade']->id}} <br>
		ITEM: {{$data['atividade']->atividade}} <br>
		EMPRESA: {{$data['empresa']->empresa}} <br>
		DISCIPLINA: {{$data['disciplina']->disciplina}} <br>
		@foreach($data['ferramenta'] as $fer)
			<li>{{$fer->ferramenta}}</li>
		@endforeach
		</p></h2><br> 
	    <div class="float-right">
		    <a href="/atividades/{{$data['atividade']->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['AtividadeController@destroy', $data['atividade']->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
			<a href="/atividades" class="btn btn-secondary">Voltar</a>
		</div>
    </div>
@endsection

@extends('layout.flutuante')
@section('conteudo')
    As informações da atividade específica podem ser observadas ao lado. É possível editá-la e deletá-la.
@endsection