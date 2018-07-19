@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'RiscosController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('risco', 'Novo Risco')}} </h2>
            {{Form::text('risco', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Risco'])}}

            <div class="float-left">
	            <a href="/riscos" class="btn mt-3 btn-secondary">Voltar</a>
	        </div>
            
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   		</div>
    {!! Form::close() !!}

@endsection