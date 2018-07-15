@extends('layout.app')

@section('content')
    
    @include('inc.messages')


    <div class="mt-5 ml-5 mr-5 mb-5">
    	<h1>Sesmt
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
            <h3><a href="/sesmt/{{$s->id}}"> {{$s->nome}} </a></h3> <br>
        @endforeach
    </div>

    <div class="float-right">{{$sesmt->links()}}</div>

@endsection