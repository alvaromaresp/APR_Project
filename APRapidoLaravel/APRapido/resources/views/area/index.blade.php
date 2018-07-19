@extends('layout.app')

@section('content')
    
    @include('inc.messages')

 
    <div class="mt-5 ml-5 mr-5">
    	<h1>Area
    	<a href="/area/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Nova</a></h1>
		{!! Form::open(['action' => 'AreaController@search', 'method' => 'post']) !!}
		<div class="input-group mb-4">
		  <input type="text" class="form-control" name="search" id="search"/>
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="submit">Buscar</button>
		  </div>
		</div>
		{!! Form::close() !!}
        @foreach($area as $n)
            <h4><a href="/area/{{$n->id}}"> {{$n->nome}} </a></h4> <br>
        @endforeach
    </div>
    <div class="float-right">
   		{{$area->links()}}
   	</div>
 
@endsection

@extends('layout.flutuante')
@section('conteudo')
    Todas as áreas cadastradas podem ser vistas ao lado, e também buscadas. A fim de criar uma nova, basta clicar em Criar Nova.
@endsection