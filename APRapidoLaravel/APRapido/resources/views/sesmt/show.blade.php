@extends('layout.app')


@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h2><p class="font-weight-bold">ID: {{$sesmt->id}} <br>
		NOME: {{$sesmt->nome}}	<br>
		TELEFONE: {{$sesmt->telefone}}	 </p></h2><br>
	    <div class="float-right">
		    <a href="/sesmt/{{$sesmt->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['SesmtController@destroy', $sesmt->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
            <a href="/sesmt" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
@endsection

@extends('layout.flutuante')
@section('conteudo')
    As informações do SESMT específico podem ser observadas ao lado. É possível editá-la e deletá-la.
@endsection