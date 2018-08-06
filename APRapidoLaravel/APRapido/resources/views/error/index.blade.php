@extends('layout.app')

@section('content')
    <p><h2>{{$exception->getMessage()}}</h2></p>
    Código do erro: {{$exception->getCode()}}
@endsection
@extends('layout.flutuante')
@section('conteudo')
    Essa página representa um erro! Se o problema continuar entre em contato com os administradores do sistema.
@endsection



