@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/responsavel"> Cadastro de Responsável</a><br>
    > SESMT</b>
@endsection

@desktop
@section('content')
    
    @include('inc.messages')


    <div class="mt-5 ml-5 mr-5 mb-5">
    	<h1>SESMT
    	<a href="/sesmt/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Nova</a></h1>
		{!! Form::open(['action' => 'SesmtController@search', 'method' => 'post']) !!}
		<div class="input-group mb-4">
		  <input type="text" class="form-control" name="search" id="search" />
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="submit">Buscar</button>
		  </div>
		</div>
		{!! Form::close() !!}
        @foreach($sesmt as $s)
            <h4><a href="/sesmt/{{$s->id}}"> {{$s->nome}} </a></h4> <br>
        @endforeach
    </div>

    <div class="float-right">{{$sesmt->links()}}</div>

@endsection
@elsedesktop
@section('content')
    
    @include('inc.messages')


    <div class="ml-5 mr-3 mb-5">
        <h1>SESMT
        <a href="/sesmt/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Nova</a></h1>
        {!! Form::open(['action' => 'SesmtController@search', 'method' => 'post']) !!}
        <div class="input-group mb-4">
          <input type="text" class="form-control" name="search" id="search" />
          <div class="input-group-append">
            <button class="btn btn-secondary" type="submit">Buscar</button>
          </div>
        </div>
        {!! Form::close() !!}
        @foreach($sesmt as $s)
            <h4><a href="/sesmt/{{$s->id}}"> {{$s->nome}} </a></h4> <br>
        @endforeach
    </div>

    <div class="float-right">{{$sesmt->links()}}</div>

@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    Todos os SESMTs cadastrados podem ser vistos ao lado, e também buscados. A fim de criar um novo, basta clicar em Criar Nova. Além disso, para verificar o conteúdo do SESMT basta clicar em seu nome.
@endsection