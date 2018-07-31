@extends('layout.app')  

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > Cadastrar Ferramentas </b>
@endsection

@section('content')
    
    @include('inc.messages')


    <div class="mt-5 ml-5 mr-5 mb-5">
    	<h1>Ferramenta
    	<a href="/ferramenta/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Nova</a></h1>
		{!! Form::open(['action' => 'FerramentaController@search', 'method' => 'post']) !!}
		<div class="input-group mb-4">
		  <input type="text" class="form-control" name="search" id="search"/>
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="submit">Buscar</button>
		  </div>
		</div>
		{!! Form::close() !!}
        @foreach($ferramenta as $fer)
            <h4><a href="/ferramenta/{{$fer->id}}"> {{$fer->ferramenta}} </a></h4> <br>
        @endforeach
    </div>

    <div class="float-right">{{$ferramenta->links()}}</div>

@endsection

@extends('layout.flutuante')
@section('conteudo')
    Todas as ferramentas cadastradas podem ser vistas ao lado, e também buscadas. A fim de criar uma nova, basta clicar em Criar Nova. Além disso, para verificar o conteúdo da ferramenta basta clicar em seu nome.
@endsection