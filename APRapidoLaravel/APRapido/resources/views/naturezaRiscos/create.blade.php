@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'naturezaRiscosController@store', 'method' => 'post']) !!}
        <div class="form-group">
            {{Form::label('natureza_risco', 'Natureza Risco')}}
            {{Form::text('natureza_risco', '', ['class' => 'form-control', 'placeholder' => 'Natureza Risco'])}}
        </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection