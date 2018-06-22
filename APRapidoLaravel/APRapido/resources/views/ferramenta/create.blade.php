@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'ferramentaController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('ferramenta', 'Nova Ferramenta')}} </h2>
            {{Form::text('ferramenta', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Ferramenta'])}}
            {{Form::select('disciplina', ['l'=>'large'])}}
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   		</div>
    {!! Form::close() !!}

@endsection