@extends('layout.app')


@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h2><p class="font-weight-bold">ID: {{$data['ferramenta']->id}} <br>
		ITEM: {{$data['ferramenta']->ferramenta}} <br>
		DISCIPLINA: {{$data['ferramenta']->disciplina_id}} <br>
		RISCOS
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

@extends('layout.flutuante')
@section('conteudo')
    As informações da ferramenta específica podem ser observadas ao lado. É possível editá-la e deletá-la.
@endsection