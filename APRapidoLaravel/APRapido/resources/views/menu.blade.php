@extends('layout.app')

@section('caminho')
    <b>> Menu</b>
@endsection

@section('content')

    <div class="row mb-2 mt-5">
        <div class="col-lg-6 mb-5 mt-4" align="center">
            <a href="/apr" class="btn btn-primary">
                Cadastrar APR
            </a>
        </div>
        <div class="col-lg-6 mb-5 mt-4" align="center">
            <a href="/ferramenta" class="btn btn-primary">
                Cadastrar Ferramentas
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-5" align="center">
            <a href="/atividades" class="btn btn-primary">
                Cadastrar Atividade
            </a>
        </div>
        <div class="col-lg-6 mb-5" align="center">
            <a href="/riscos" class="btn btn-primary">
                Cadastrar Riscos
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-5" align="center">
            <a href="/responsavel" class="btn btn-primary">
                Cadastrar Responsável
            </a>
        </div>
        <div class="col-lg-6 mb-5" align="center">
            <a href="/medidaPreventiva" class="btn btn-primary">
                Cadastrar MP
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-5" align="center">
            <div class="btn btn-primary">
                Registro de Impressão
            </div>
        </div>
        <div class="col-lg-6 mb-5" align="center">
            
        </div>
    </div>
@endsection


@extends('layout.flutuante')
@section('conteudo')
    Bem-vindo ao software APRapido. Ele foi feito pela empresa <b>SOTI</b> para otimizar a criação do documento APR. Para isso, foram identificadas as principais variáveis para a montagem do documento e ao lado você tem a opção de criar, alterar e buscar por elas. Além disso, para a criação final do documento você deve entrar em  "Cadastrar APR", e então montar ou selecionar um APR já disponível. E, por último, a opção de Registro de Impressão provém os dados de quando, quem e qual documento foi impresso.
@endsection