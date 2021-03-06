@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/responsavel"> Cadastro de Responsável</a><br>
    > <a href="/coordena"> Coordenador Responsável </a><br>
    > Coordenador: {{$coordena->nome}}</b>
@endsection

@desktop
@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h2><p class="font-weight-bold">
	    COORDENADOR: {{$coordena->nome}} <br><br>
		TELEFONE: {{$coordena->telefone}}  </p></h2><br><br>
	    <div class="float-right">
		    <a href="/coordena/{{$coordena->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['CoordenaController@destroy', $coordena->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
			<a href="/coordena" class="btn btn-secondary">Voltar</a>
		</div>
    </div>
@endsection 
@elsedesktop
@section('content')
	<div class="ml-5 mr-3 mb-5">
	    <h2><p class="font-weight-bold">
	    COORDENADOR: {{$coordena->nome}} <br><br>
		TELEFONE: {{$coordena->telefone}}  </p></h2><br><br>
	    <div class="float-right">
		    <a href="/coordena/{{$coordena->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['CoordenaController@destroy', $coordena->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left mt-2 mb-5">
			<a href="/coordena" class="btn btn-secondary">Voltar</a>
		</div>
    </div>
@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    As informações do Coordenador específico podem ser observadas ao lado. É possível editá-la e deletá-la.
@endsection