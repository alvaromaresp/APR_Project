@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'FerramentaController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('ferramenta', 'Nova Ferramenta')}} </h2>
            {{Form::text('ferramenta', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Ferramenta'])}}


            <?php
                $dis = array();
            ?>

            @foreach($disciplina as $d)
                <?php
                    array_push($dis, [$d->id => $d->disciplina])
                ?>
            @endforeach

            {{Form::select('disciplina', $dis, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Disciplina'])}} <br>
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <div class="float-left">
                <a href="/ferramenta" class="btn mt-3 btn-secondary">Voltar</a>
            </div>
   		</div>
    {!! Form::close() !!}

@endsection

@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para cadastrar uma nova ferramenta, a fim de ser selecionada futuramente no cadastro de uma atividade.
@endsection