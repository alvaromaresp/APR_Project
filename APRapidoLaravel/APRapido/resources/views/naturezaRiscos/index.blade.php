@extends('layout.app')

@section('content')
    
    @include('inc.messages')


    <div class="mt-5 ml-5 mr-5">
    	<h1>Naturezas de Risco
    	<a href="/naturezaRiscos/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Nova</a></h1>
    	<div class="input-group mb-4">
		  <input type="text" class="form-control">
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="button">Buscar</button>
		  </div>
		</div>
        @foreach($nr as $n)
            <h4><a href="/naturezaRiscos/{{$n->id}}"> {{$n->natureza_risco}} </a></h4> <br>
        @endforeach
    </div>
    <div class="float-right">
   		{{$nr->links()}}
   	</div>

@endsection