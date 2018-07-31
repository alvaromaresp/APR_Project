@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/responsavel"> Cadastro de Responsável</a><br>
    > Coordenador Responsável</b>
@endsection

@section('content')
    
    @include('inc.messages')


    <div class="mt-5 ml-5 mr-5">
    	<h1>Coordenador de Obra
    	<a href="/coordena/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Nova</a></h1>
		{!! Form::open(['action' => 'CoordenaController@search', 'method' => 'post']) !!}
		<div class="input-group mb-4">
		  <input type="text" class="form-control" name="search" id="search">
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="submit">Buscar</button>
		  </div>
		</div>
		{!! Form::close() !!}
        @foreach($coordena as $n)
            <h4><a href="/coordena/{{$n->id}}"> {{$n->nome}} </a></h4> <br>
        @endforeach
    </div>
    <div class="float-right">
   		{{$coordena->links()}}
   	</div>
 
@endsection

@extends('layout.flutuante')
@section('conteudo')
    Todas o(s) Coordenador(es) cadastrado(s) podem ser vistas ao lado, e também buscadas. A fim de cadastrar um novo, basta clicar em Criar Nova. Além disso, para verificar o conteúdo do coordenador basta clicar em seu nome.
@endsection