@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['naturezaRiscosController@update', $nr->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('natureza_risco', 'Editar Natureza de Risco')}} </h2>	
            {{Form::text('natureza_risco', $nr->natureza_risco, ['class' => 'form-control', 'placeholder' => 'Natureza Risco'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		    <div class="float-left">
	            <a href="/medidaPreventiva" class="btn mt-3 btn-secondary">Voltar</a>
	        </div>
		</div>
    {!! Form::close() !!}

@endsection