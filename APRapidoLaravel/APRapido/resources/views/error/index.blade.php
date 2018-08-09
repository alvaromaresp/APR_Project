@extends('layout.app')

@desktop
@section('content')
	<div class="ml-5 mr-5">
	    <p><h1 class="mt-5">{{$exception->getMessage()}}</h1></p>
	    Código do erro: {{$exception->getCode()}}
	    <h3 class="mt-2">Se a mensagem de erro acima for "You don't have a required ['user'] role." basta ir para a página de <a href='/login'>login</a> e logar no sistema. </h3>
	</div>
@endsection
@elsedesktop
@section('content')
	<div class="ml-5 mr-5">
	    <p><h1>{{$exception->getMessage()}}</h1></p>
	    Código do erro: {{$exception->getCode()}}
	    <h3 class="mt-2 mb-5">Se a mensagem de erro acima for "You don't have a required ['user'] role." basta ir para a página de <a href='/login'>login</a> e logar no sistema. </h3>
	</div>
@endsection
@enddesktop

@extends('layout.flutuante')
@section('conteudo')
    Essa página representa um erro! Se o problema continuar entre em contato com os administradores do sistema.
@endsection



