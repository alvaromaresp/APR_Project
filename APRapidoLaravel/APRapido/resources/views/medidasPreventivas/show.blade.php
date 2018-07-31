@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/medidaPreventiva"> Cadastrar Medidas Preventivas </a><br>
    > Medida Preventiva: {{$medidasPreventivas->medidapreventiva}} </b>
@endsection

@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h2><p class="font-weight-bold">ID: {{$medidasPreventivas->id}} <br>
	    ITEM: {{$medidasPreventivas->medidapreventiva}} </p></h2><br>
	    <div class="float-right">
		    <a href="/medidaPreventiva/{{$medidasPreventivas->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['MedidaPreventivaController@destroy', $medidasPreventivas->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
            <a href="/medidaPreventiva" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
@endsection

@extends('layout.flutuante')
@section('conteudo')
    As informações da medida preventiva específica podem ser observadas ao lado. É possível editá-la e deletá-la.
@endsection