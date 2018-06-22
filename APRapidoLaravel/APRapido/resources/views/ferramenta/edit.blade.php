@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['ferramentaController@update', $ferramenta->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('ferramenta', 'Editar Ferramenta')}} </h2>	
            {{Form::text('ferramenta', $ferramenta->ferramenta, ['class' => 'form-control', 'placeholder' => 'Ferramenta'])}}
            {{Form::select('disciplina', ['l'=>'large'])}}
            {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection