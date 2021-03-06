@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/riscos"> Cadastrar Riscos </a><br>
    > Riscos: {{$data['riscos']->risco}} </b>
@endsection

@desktop
@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h2><p class="font-weight-bold">
		ITEM: {{$data['riscos']->risco}} <br><br>
		MEDIDAS PREVENTIVAS: <br><br>

		@foreach($data['mp'] as $mp)
			<li>{{$mp->medidapreventiva}}</li>
		@endforeach
		
		</p></h2><br>
	    <div class="float-right">
		    <a href="/riscos/{{$data['riscos']->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['RiscosController@destroy', $data['riscos']->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
            <a href="/riscos" class="btn mt-3 btn-secondary">Voltar</a>
        </div>
    </div>
@endsection
@elsedesktop
@section('content')
	<div class="ml-5 mr-3 mb-5">
	    <h3><p class="font-weight-bold">
		ITEM: {{$data['riscos']->risco}} <br><br>
		MEDIDAS PREVENTIVAS: <br><br>

		@foreach($data['mp'] as $mp)
			<li>{{$mp->medidapreventiva}}</li>
		@endforeach
		
		</p></h3><br>
	    <div class="float-right">
		    <a href="/riscos/{{$data['riscos']->id}}/edit" class="btn btn-success mt-3">Editar</a>
		    {!!Form::open(['action' => ['RiscosController@destroy', $data['riscos']->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
            <a href="/riscos" class="btn mt-3 btn-secondary">Voltar</a>
        </div>
    </div>
@endsection
@enddesktop

@extends('layout.flutuante')
@section('conteudo')
    As informações do risco específico podem ser observados ao lado. É possível editá-lo e deletá-lo.
@endsection