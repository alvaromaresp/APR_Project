@extends('layout.app')

@section('caminho')
    <b> > <a href="/"> Menu </a><br>
    > <a href="/responsavel"> Cadastro de Responsável</a><br>
    > <a href="/coordena"> Coordenador Responsável </a><br>
    > Editar Coordenador: {{$coordena->nome}}</b>
@endsection

@section('content')

    {!! Form::open(['action' => ['CoordenaController@update', $coordena->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('nome', 'Editar Coordenador')}} </h2>	
            {{Form::text('nome', $coordena->nome, ['class' => 'form-control', 'placeholder' => 'Coordenador'])}}
            {{Form::text('telefone', $coordena->telefone, ['class' => 'form-control mt-3', 'placeholder' => 'Telefone'])}}
		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		    <div class="float-left">
				<a href="/coordena" class="btn mt-3 btn-secondary">Voltar</a>
			</div>
		</div>
    {!! Form::close() !!}

@endsection 

@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para editar a informação, a fim de deixa-la mais precisa, para que ela seja selecionada futuramente na montagem da APR.
@endsection