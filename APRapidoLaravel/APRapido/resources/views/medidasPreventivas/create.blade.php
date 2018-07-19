@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'MedidaPreventivaController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('medidapreventiva', 'Nova Medida Preventiva')}} </h2>
            {{Form::text('medidapreventiva', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Medida Preventiva'])}}
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   			<div class="float-left">
	            <a href="/medidaPreventiva" class="btn mt-3 btn-secondary">Voltar</a>
	        </div>
   		</div>
    {!! Form::close() !!}

@endsection

@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para cadastrar uma nova medida preventiva, a fim de ser selecionada futuramente no cadastro de um novo risco.
@endsection