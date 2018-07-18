@extends('layout.app')

@section('content')

    <div class="row mb-2 mt-5">
        <div class="col-lg-6 mb-5 mt-5" align="center">
            <a href="/apr/create" class="btn btn-primary">
                Criar APR
            </a>
        </div>
        <div class="col-lg-6 mb-5 mt-5" align="center">
            <a href="/ferramenta/create" class="btn btn-primary">
                Cadastro Ferramentas
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-5" align="center">
            <div class="btn btn-primary">
                Visualizar APRs
            </div>
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
                    Cadastro Responsável
                </a>
            </div>
        </div>
@endsection