@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'EmpresaController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('empresa', 'Nova Empresa')}} </h2>
            {{Form::text('empresa', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Empresa'])}}
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   			<div class="float-left">
				<a href="/empresa" class="btn mt-3 btn-secondary">Voltar</a>
			</div>
   		</div>
    {!! Form::close() !!}

@endsection