@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['disciplinaController@update', $iddisciplina->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('disciplina', 'Editar Disciplina')}} </h2>	
            {{Form::text('disciplina', $iddisciplina->disciplina, ['class' => 'form-control', 'placeholder' => 'Disciplina'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection 