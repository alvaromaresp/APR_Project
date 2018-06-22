@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['coordenaController@update', $idcoordena->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('nome', 'Editar Coordenador')}} </h2>	
            {{Form::text('nome', $idcoordena->nome, ['class' => 'form-control', 'placeholder' => 'Coordenador'])}}
            {{Form::text('telefone', $idcoordena->telefone, ['class' => 'form-control', 'placeholder' => 'Telefone'])}}
		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection 