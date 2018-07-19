@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'SesmtController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('nome', 'Novo SESMT')}} </h2>
            {{Form::text('nome', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Nome'])}}
            {{Form::text('telefone', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Telefone'])}}
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   			<div class="float-left">
	            <a href="/sesmt" class="btn mt-3 btn-secondary">Voltar</a>
	        </div>
   		</div>
    {!! Form::close() !!}

@endsection