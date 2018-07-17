@extends('layout.app')  

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
            <h3><a href="/ferramenta/{{$fer->id}}"> {{$fer->ferramenta}} </a></h3> <br>
        @endforeach
    </div>

    <div class="float-right">{{$ferramenta->links()}}</div>

@endsection