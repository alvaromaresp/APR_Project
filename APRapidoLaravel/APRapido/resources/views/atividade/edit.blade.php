@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['riscosController@update', $riscos->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('risco', 'Editar Risco')}} </h2>	
            {{Form::text('risco', $riscos->risco, ['class' => 'form-control', 'placeholder' => 'Risco'])}}
            {{Form::select('medidaPreventiva', ['l'=>'large'])}}
		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection