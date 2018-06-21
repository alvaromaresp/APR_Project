@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['empresaController@update', $empresa->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('natureza_risco', 'Editar Natureza de Risco')}} </h2>	
            {{Form::text('natureza_risco', $empresa->natureza_risco, ['class' => 'form-control', 'placeholder' => 'Natureza Risco'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection