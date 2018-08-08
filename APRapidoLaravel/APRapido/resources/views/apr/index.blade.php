@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > Cadastrar APR </b>
@endsection

@desktop 
@section('content')

    @include('inc.messages')


    <div class="mt-5 ml-5 mr-5 mb-5">
    	<h1>APR
    	<a href="/apr/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Novo</a></h1>
    	<div class="input-group mb-4">
		  <input type="text" class="form-control">
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="button">Buscar</button>
		  </div>
		</div>

        @foreach($apr as $n)
            <h3><a href="/apr/{{$n->id}}"> {{$n->nome}} </a></h3> <br>
        @endforeach
    </div>

    <div class="float-right">{{$apr->links()}}</div>

@endsection
@elsedesktop 
@section('content')

    @include('inc.messages')

    <div class="ml-5 mr-5 mb-5">
        <h1>APR
        <a href="/apr/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Novo</a></h1>
        <div class="input-group mb-4">
          <input type="text" class="form-control">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="button">Buscar</button>
          </div>
        </div>

        @foreach($apr as $n)
            <h3><a href="/apr/{{$n->id}}"> {{$n->nome}} </a></h3> <br>
        @endforeach
    </div>

    <div class="float-right">{{$apr->links()}}</div>

@endsection
@enddesktop 
@extends('layout.flutuante')
@section('conteudo')
    Todas as APRs cadastradas podem ser vistas ao lado, e também buscadas. A fim de criar uma nova, basta clicar em Criar Nova. Além disso, para verificar o conteúdo da APR basta clicar em seu nome.
@endsection