@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'ImpressaoController@store', 'method' => 'post']) !!}
    <div class="form-group mt-5 ml-5 mr-5 mb-5">
        <h2> {{Form::label('nome', 'Nova Impressão')}} </h2>
        {{Form::hidden('apr',$data['apr'])}}


        {{Form::text('responsavel', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Responsável'])}}
        {{Form::text('telResponsavel', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Telefone Responsável'])}}
        {{Form::text('celula', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Célula'])}}

        {{Form::label('area', 'Selecione a Área')}}
        {{Form::select('area',$data['areas'],null,['class' => 'form-control mt-3 mb-3'])}}
        {{Form::label('sesmt', 'Selecione o Sesmt')}}
        {{Form::select('sesmt',$data['sesmts'],null,['class' => 'form-control mt-3 mb-3'])}}
        {{Form::label('coordena', 'Selecione o Coordena')}}
        {{Form::select('coordena',$data['coordenas'],null,['class' => 'form-control mt-3 mb-3'])}}
        {{Form::label('empresa', 'Selecione a Empresa')}}
        {{Form::select('empresa',$data['empresas'],null,['class' => 'form-control mt-3 mb-3'])}}

        {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
        <div class="float-left">
            <a href="/apr" class="btn mt-3 btn-secondary">Voltar</a>
        </div>
    </div>
    {!! Form::close() !!}

@endsection

@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para cadastrar uma nova impressão, a fim de gerar um novo PDF para imprimir as informações referentes a um APR.
@endsection
