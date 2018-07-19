@extends('layout.app')

@section('content')
 
    {!! Form::open(['action' => 'AreaController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('nome', 'Nova Area')}} </h2>
            {{Form::text('nome', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Area'])}}
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   			<div class="float-left">
  				<a href="/area" class="btn mt-3 btn-secondary">Voltar</a>
  			</div>
   		</div>
    {!! Form::close() !!}

@endsection 

@extends('layout.flutuante')
@section('conteudo')
    Essa é a area bla
@endsection
