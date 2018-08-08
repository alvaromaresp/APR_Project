@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > Cadastro de Responsável</b>
@endsection

@desktop
@section('content')

    <div class="row mb-2 mt-5">
        <div class="col-lg-6 mb-5 mt-5" align="center">
            <a href="/sesmt" class="btn btn-primary">
                SESMT
            </a>
        </div>
        <div class="col-lg-6 mb-5 mt-5" align="center">
            <a href="/coordena" class="btn btn-primary">
                Coordenador
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-5" align="center">
        </div>
        <div class="col-lg-6 mt-5" align="center">
            <a href="/" class="btn btn-primary">
                Voltar
            </a>
        </div>
    </div>
@endsection
@elsedesktop
@section('content')

    <div class="row ml-3 mb-2">
        <div class="col-lg-6 mb-5 mt-5" align="center">
            <a href="/sesmt" class="btn btn-primary">
                SESMT
            </a>
        </div>
        <div class="col-lg-6 mb-5" align="center">
            <a href="/coordena" class="btn btn-primary">
                Coordenador
            </a>
        </div>
    </div>
    <div class="row ml-3">
        <div class="col-lg-6 mt-5 mb-5" align="center">
            <a href="/" class="btn btn-primary">
                Voltar
            </a>
        </div>
    </div>
@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    O menu de cadastro de responsáveis serve para o cadastro das informações que são necessárias para o preenchimento do documento.
@endsection