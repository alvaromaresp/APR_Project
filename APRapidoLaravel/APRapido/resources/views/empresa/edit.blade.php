@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['EmpresaController@update', $empresa->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('empresa', 'Editar Empresa')}} </h2>	
            {{Form::text('empresa', $empresa->empresa, ['class' => 'form-control', 'placeholder' => 'Empresa'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection