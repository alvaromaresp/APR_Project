@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/responsavel"> Cadastro de Responsável</a><br>
    > <a href="/sesmt"> SESMT </a><br>
    > SESMT: {{$sesmt->nome}}</b>
@endsection

@desktop
@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h2><p class="font-weight-bold">
		NOME: {{$sesmt->nome}}	<br><br>
		TELEFONE: {{$sesmt->telefone}}	 </p></h2><br><br>
	    <div class="float-right">
		    <a href="/sesmt/{{$sesmt->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['SesmtController@destroy', $sesmt->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
            <a href="/sesmt" class="btn btn-secondary mb-5">Voltar</a>
        </div>
    </div>
@endsection
@elsedesktop
@section('content')
	<div class="ml-5 mr-3 mb-5">
	    <h2><p class="font-weight-bold">
		NOME: {{$sesmt->nome}}	<br><br>
		TELEFONE: {{$sesmt->telefone}}	 </p></h2><br><br>
	    <div class="float-right">
		    <a href="/sesmt/{{$sesmt->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['SesmtController@destroy', $sesmt->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
            <a href="/sesmt" class="btn btn-secondary mt-2">Voltar</a>
        </div>
    </div>
@endsection
@enddesktop

@extends('layout.flutuante')
@section('conteudo')
    As informações do SESMT específico podem ser observadas ao lado. É possível editá-la e deletá-la.
@endsection