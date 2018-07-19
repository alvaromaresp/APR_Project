@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['RiscosController@update', $risco->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('risco', 'Editar Risco')}} </h2>	
            {{Form::text('risco', $risco->risco, ['class' => 'form-control', 'placeholder' => 'Risco'])}}
	        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		    <div class="float-left">
	            <a href="/riscos" class="btn mt-3 btn-secondary">Voltar</a>
	        </div>
		</div>
    {!! Form::close() !!}

@endsection