@extends('layout.app')


@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h2><p class="font-weight-bold">ID: {{$nr->id}} <br>
	    ITEM: {{$nr->natureza_risco}} </p></h2><br>
	    <div class="float-right">
		    <a href="/naturezaRiscos/{{$nr->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['naturezaRiscosController@destroy', $nr->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
            <a href="/naturezaRiscos" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
@endsection