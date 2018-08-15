@extends('layout.app')

@section('caminho')
    <b> > <a href="/"> Menu </a><br>
    > <a href="/responsavel"> Cadastro de Responsável</a><br>
    > <a href="/coordena"> Coordenador Responsável </a><br>
    > Criar novo Coordenador</b>
@endsection

@desktop
@section('content')

    {!! Form::open(['action' => 'CoordenaController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('nome', 'Novo Coordenador de Obras')}} </h2>
            {{Form::text('nome', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Nome'])}}
            {{Form::text('telefone', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Telefone - (XX) XXXX-XXXX'])}}
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   			<div class="float-left">
				<a href="/coordena" class="btn mt-3 btn-secondary">Voltar</a>
			</div>
   		</div>
    {!! Form::close() !!}

@endsection  
@elsedesktop
@section('content')

    {!! Form::open(['action' => 'CoordenaController@store', 'method' => 'post']) !!}
        <div class="form-group ml-5 mr-3 mb-5">
            <h2> {{Form::label('nome', 'Novo Coordenador de Obras')}} </h2>
            {{Form::text('nome', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Nome'])}}
            {{Form::text('telefone', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Telefone - (XX) XXXX-XXXX'])}}
        {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
        <div class="float-left">
        <a href="/coordena" class="btn mt-3 mb-5 btn-secondary">Voltar</a>
      </div>
      </div>
    {!! Form::close() !!}

@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para cadastrar um novo Coordenador, a fim de ser selecionada futuramente na montagem da APR.
@endsection