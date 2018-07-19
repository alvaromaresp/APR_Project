
@extends('layout.app')

@section('content')
    
    @include('inc.messages')


    <div class="mt-5 ml-5 mr-5 mb-5">
    	<h1>Medidas Preventivas
    	<a href="/medidaPreventiva/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Nova</a></h1>
		{!! Form::open(['action' => 'MedidaPreventivaController@search', 'method' => 'post']) !!}
		<div class="input-group mb-4">
		  <input type="text" class="form-control" name="search" id="search"/>
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="submit">Buscar</button>
		  </div>
		</div>
		{!! Form::close() !!}
        @foreach($medidasPreventivas as $mp)
            <h4><a href="/medidaPreventiva/{{$mp->id}}"> {{$mp->medidapreventiva}} </a></h4> <br>
        @endforeach
    </div>

    <div class="float-right">{{$medidasPreventivas->links()}}</div>

@endsection

@extends('layout.flutuante')
@section('conteudo')
    Todas as medidas preventivas cadastradas podem ser vistas ao lado, e também buscadas. A fim de criar uma nova, basta clicar em Criar Nova.
@endsection