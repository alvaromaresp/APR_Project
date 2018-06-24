@extends('layout.app')
 
@section('content')

    {!! Form::open(['action' => ['AreaController@update', $area->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('nome', 'Editar Check List')}} </h2>	
            {{Form::text('nome', $area->nome, ['class' => 'form-control', 'placeholder' => 'Area'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection 