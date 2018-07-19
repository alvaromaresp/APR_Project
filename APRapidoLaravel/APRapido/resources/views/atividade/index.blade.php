@extends('layout.app')

@section('content')
    
    @include('inc.messages')


    <div class="mt-5 ml-5 mr-5 mb-5">
    	<h1>Atividades
    	<a href="/atividades/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Novo</a></h1>
    	<div class="input-group mb-4">
		  <input type="text" class="form-control">
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="button">Buscar</button>
		  </div> 
		</div>
        @foreach($atividades as $n)
            <h3><a href="/atividades/{{$n->id}}"> {{$n->atividade}} </a></h3> <br>
        @endforeach
    </div>

    <div class="float-right">{{$atividades->links()}}</div>

@endsection