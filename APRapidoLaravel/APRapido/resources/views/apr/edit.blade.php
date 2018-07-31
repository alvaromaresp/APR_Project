@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/apr"> Cadastrar APR </a><br>
    > Editar APR: {{$data['apr']->nome}} </b>
@endsection

@section('content')

{!! Form::open(['action' => ['AprController@update', $data['apr']->id], 'method' => 'post']) !!}
    <div class="form-group mt-5 ml-5 mr-5 mb-5">
        <h2> {{Form::label('nome', 'Nova APR')}} </h2>
        {{Form::text('nome', $data['apr']->nome, ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Nome'])}}
        {{Form::text('telr', $data['apr']->telr, ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Telr'])}}

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   </div>
{!! Form::close() !!}

@endsection

@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para editar a APR, a fim de melhorar o conteúdo do documento final.
@endsection