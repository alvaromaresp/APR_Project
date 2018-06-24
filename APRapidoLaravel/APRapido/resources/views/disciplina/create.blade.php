@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'DisciplinaController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('disciplina', 'Nova Disciplina')}} </h2>
            {{Form::text('disciplina', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Disciplina'])}}
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   		</div>
    {!! Form::close() !!}

@endsection 