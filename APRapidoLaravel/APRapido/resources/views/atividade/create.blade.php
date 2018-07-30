@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/atividades"> Cadastrar Atividades </a><br>
    > Criar nova Atividade</b>
@endsection 

@section('content')

    {!! Form::open(['action' => 'AtividadeController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('atividade', 'Nova Atividade')}} </h2>
            {{Form::text('atividade', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Atividade'])}}

            <?php
                $dis = array(); 
            ?>
 
            @foreach($data['disciplina'] as $d)
                <?php
                    array_push($dis, [$d->id => $d->disciplina])
                ?>
            @endforeach

            {{Form::select('disciplina', $dis, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Disciplina'])}}

            <?php
                $emp = array();
            ?>

            @foreach($data['empresa'] as $e)
                <?php
                    array_push($emp, [$e->id => $e->empresa])
                ?>
            @endforeach

            {{Form::select('empresa', $emp, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Empresa'])}}

   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   		</div>
    {!! Form::close() !!}

@endsection

@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para cadastrar uma nova atividade, a fim de ser selecionada futuramente na montagem da APR.
@endsection