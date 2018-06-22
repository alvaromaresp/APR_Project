@extends('layout.app')


@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h1><p class="font-weight-bold">ID: {{$empresa->id}} <br>
	    ITEM: {{$empresa->empresa}} </p></h1><br>
	    <div class="float-right">
		    <a href="/empresa/{{$empresa->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['empresaController@destroy', $empresa->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
    </div>
@endsection