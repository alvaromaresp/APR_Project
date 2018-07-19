@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['CoordenaController@update', $coordena->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('nome', 'Editar Coordenador')}} </h2>	
            {{Form::text('nome', $coordena->nome, ['class' => 'form-control', 'placeholder' => 'Coordenador'])}}
            {{Form::text('telefone', $idcoordena->telefone, ['class' => 'form-control', 'placeholder' => 'Telefone'])}}
		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		    <div class="float-left">
				<a href="/coordena" class="btn mt-3 btn-secondary">Voltar</a>
			</div>
		</div>
    {!! Form::close() !!}

@endsection 