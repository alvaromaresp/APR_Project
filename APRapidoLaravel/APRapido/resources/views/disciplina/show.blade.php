@extends('layout.app')


@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h1><p class="font-weight-bold">ID: {{$iddisciplina->id}} <br>
	    ITEM: {{$iddisciplina->disciplina}} </p></h1><br>
	    <div class="float-right">
		    <a href="/disciplina/{{$iddisciplina->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['disciplinaController@destroy', $iddisciplina->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
    </div>
@endsection 