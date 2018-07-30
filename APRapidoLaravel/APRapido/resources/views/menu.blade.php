@extends('layout.app')

@section('caminho')
    <b>> Menu</b>
@endsection

@section('content')

    <div class="row mb-2 mt-5">
        <div class="col-lg-6 mb-5 mt-4" align="center">
            <a href="/apr/create" class="btn btn-primary">
                Criar APR
            </a>
        </div>
        <div class="col-lg-6 mb-5 mt-4" align="center">
            <a href="/ferramenta/create" class="btn btn-primary">
                Cadastro Ferramentas
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-5" align="center">
            <a href="/apr" class="btn btn-primary">
                Visualizar APRs
            </a>
        </div>
        <div class="col-lg-6 mb-5" align="center">
            <a href="/riscos/create" class="btn btn-primary">
                Cadastro Riscos
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-5" align="center">
            <a href="/editar" class="btn btn-primary">
                Editar Informações
            </a>
        </div>
        <div class="col-lg-6 mb-5" align="center">
            <a href="/medidaPreventiva/create" class="btn btn-primary">
                Cadastro MP
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
                <a href="/responsavel" class="btn btn-primary">
                    Cadastrar Responsável
                </a>
            </div>
        </div>
@endsection


@extends('layout.flutuante')
@section('conteudo')
    Bem-vindo ao software APRapido. Ele foi feito pela empresa <b>SOTI</b> para otimizar a criação do documento APR. Para criar um novo documento, clique em Criar APR. Para verificar se existe a APR procurada ou imprimir outro documento, vá em visualizar APRs. As funções cadastrar nova ferramenta, risco ou medida preventiva tem como objetivo auxiliar a montagem do documento final. Para editar qualquer uma dessas informações, basta entrar no menu de edições pelo botão Editar Informações. Para cadastrar informações como coordenador responsável e SESMT responsável basta clicar em Cadastrar Responsável. E, por último, a opção de Registro de Impressão provém os dados de quando, quem e qual documento foi impresso.
@endsection