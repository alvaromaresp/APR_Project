@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/ferramenta"> Cadastrar Ferramentas </a><br>
    > Ferramenta: {{$data['ferramenta']->ferramenta}} </b>
@endsection

@desktop
@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h2><p class="font-weight-bold">
		ITEM: {{$data['ferramenta']->ferramenta}} <br><br>
		DISCIPLINA: {{$data['disciplina']->disciplina}} <br><br>
		RISCOS:
		@foreach($data['riscos'] as $ris)

			<li>{{$ris->risco}}</li>

		@endforeach
		 
		</p></h2><br>
	    <div class="float-right">
		    <a href="/ferramenta/{{$data['ferramenta']->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['FerramentaController@destroy', $data['ferramenta']->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
            <a href="/ferramenta" class="btn mt-3 btn-secondary">Voltar</a>
        </div>
    </div>
@endsection
@elsedesktop
@section('content')
	<div class="ml-5 mr-3 mb-5">
	    <h3><p class="font-weight-bold">
		ITEM: {{$data['ferramenta']->ferramenta}} <br><br>
		DISCIPLINA: {{$data['disciplina']->disciplina}} <br><br>
		RISCOS:
		@foreach($data['riscos'] as $ris)

			<li>{{$ris->risco}}</li>

		@endforeach
		 
		</p></h3><br>
	    <div class="float-right">
		    <a href="/ferramenta/{{$data['ferramenta']->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['FerramentaController@destroy', $data['ferramenta']->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
            <a href="/ferramenta" class="btn mt-2 btn-secondary">Voltar</a>
        </div>
    </div>
@endsection
@enddesktop

@extends('layout.flutuante')
@section('conteudo')
    As informações da ferramenta específica podem ser observadas ao lado. É possível editá-la e deletá-la.
@endsection