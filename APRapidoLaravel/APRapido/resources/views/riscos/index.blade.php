@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > Cadastrar Riscos </b>
@endsection

@section('content')
    
    @include('inc.messages')


    <div class="mt-5 ml-5 mr-5 mb-5">
    	<h1>Riscos
    	<a href="/riscos/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Novo</a></h1>
		{!! Form::open(['action' => 'RiscosController@search', 'method' => 'post']) !!}
		<div class="input-group mb-4">
		  <input type="text" class="form-control" name="search" id="search">
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="submit">Buscar</button>
		  </div>
		</div>
		{!! Form::close() !!}
        @foreach($riscos as $risco)
            <h4><a href="/riscos/{{$risco->id}}"> {{$risco->risco}} </a></h4> <br>
        @endforeach
    </div>

    <div class="float-right">{{$riscos->links()}}</div>

@endsection

@extends('layout.flutuante')
@section('conteudo')
    Todas os riscos cadastrados podem ser vistas ao lado, e também buscados. A fim de criar um novo, basta clicar em Criar Novo. Além disso, para verificar o conteúdo do risco basta clicar em seu nome.
@endsection