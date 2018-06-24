@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['MedidaPreventivaController@update', $medidasPreventivas->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('medidapreventiva', 'Editar Medida Preventiva')}} </h2>	
            {{Form::text('medidapreventiva', $medidasPreventivas->medidapreventiva, ['class' => 'form-control', 'placeholder' => 'Medida Preventiva'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection