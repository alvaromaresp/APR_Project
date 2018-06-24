@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'MedidaPreventivaController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('medidapreventiva', 'Nova Medida Preventiva')}} </h2>
            {{Form::text('medidapreventiva', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Medida Preventiva'])}}
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   		</div>
    {!! Form::close() !!}

@endsection