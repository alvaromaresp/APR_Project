@extends('layout.app')

@section('content')
    
    @include('inc.messages')


    <div class="mt-5 ml-5 mr-5 mb-5">
    	<h1>Empresa
    	<a href="/empresa/create" class="btn btn-secondary float-right mt-2 mb-3">Criar Nova</a></h1>
    	<div class="input-group mb-4">
		  <input type="text" class="form-control">
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="button">Buscar</button>
		  </div>
		</div>
        @foreach($empresa as $emp)
            <h3><a href="/empresa/{{$emp->id}}"> {{$emp->empresa}} </a></h3> <br>
        @endforeach
    </div>

    <div class="float-right">{{$empresa->links()}}</div>

@endsection