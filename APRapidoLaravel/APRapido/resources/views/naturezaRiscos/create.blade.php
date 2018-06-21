@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'naturezaRiscosController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('natureza_risco', 'Nova Natureza de Risco')}} </h2>
            {{Form::text('natureza_risco', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Natureza Risco'])}}
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   		</div>
    {!! Form::close() !!}

@endsection