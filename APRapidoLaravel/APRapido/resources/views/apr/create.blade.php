@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/apr"> Cadastrar APR </a><br>
    > Criar nova APR</b>
@endsection 


@section('content')

    {!! Form::open(['action' => 'AprController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('nome', 'Nova APR')}} </h2>
            {{Form::text('nome', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Tarefa'])}}

        
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   		</div>
    {!! Form::close() !!}

@endsection

@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para criar um novo documento APR. 
@endsection