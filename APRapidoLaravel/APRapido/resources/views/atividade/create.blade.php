@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'AtividadeController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('atividade', 'Nova Atividade')}} </h2>
            {{Form::text('atividade', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Atividade'])}}
            
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   		</div>
    {!! Form::close() !!}

@endsection