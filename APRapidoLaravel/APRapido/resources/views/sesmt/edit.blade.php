@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['SesmtController@update', $sesmt->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('nome', 'Editar SESMT')}} </h2>	
            {{Form::text('nome', $sesmt->nome, ['class' => 'form-control', 'placeholder' => 'Nome'])}}
            {{Form::text('telefone', $sesmt->telefone, ['class' => 'form-control mt-3', 'placeholder' => 'Telefone'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		    <div class="float-left">
	            <a href="/Sesmt" class="btn mt-3 btn-secondary">Voltar</a>
	        </div>
		</div>
    {!! Form::close() !!}

@endsection

@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para editar a informação, a fim de deixa-la mais precisa, para que ela seja selecionada futuramente na montagem da APR.
@endsection