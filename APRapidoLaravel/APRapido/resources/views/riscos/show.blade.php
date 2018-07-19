@extends('layout.app')


@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h2><p class="font-weight-bold">ID: {{$data['riscos']->id}} <br>
		ITEM: {{$data['riscos']->risco}} <br>
		MEDIDAS PREVENTIVAS {{$data['mp']}}<br>
		
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

@extends('layout.flutuante')
@section('conteudo')
    As informações do risco específico podem ser observados ao lado. É possível editá-lo e deletá-lo.
@endsection