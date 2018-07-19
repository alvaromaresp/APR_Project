@extends('layout.app')

@section('content')

    <div class="row mb-2 mt-5">
        <div class="col-lg-6 mb-5 mt-5" align="center">
            <a href="/apr" class="btn btn-primary">
                APR
            </a>
        </div>
        <div class="col-lg-6 mb-5 mt-5" align="center">
            <a href="/riscos" class="btn btn-primary">
                Riscos
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-5" align="center">
            <a href="/ferramenta" class="btn btn-primary">
                Ferramentas
            </a>
        </div>
        <div class="col-lg-6 mb-5" align="center">
            <a href="/medidaPreventiva" class="btn btn-primary">
                Medidas Preventivas
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-5" align="center">
            <a href="/atividades" class="btn btn-primary">
                Atividades
            </a>
        </div>
        <div class="col-lg-6 mb-5" align="center">
            <a href="/" class="btn btn-primary">
                Voltar
            </a>
        </div>
    </div>
@endsection