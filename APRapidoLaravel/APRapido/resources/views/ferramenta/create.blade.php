@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/ferramenta"> Cadastrar Ferramentas </a><br>
    > Criar nova Ferramenta</b>
@endsection

@desktop
@section('content')

    {!! Form::open(['action' => 'FerramentaController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('ferramenta', 'Nova Ferramenta')}} </h2>
            {{Form::text('ferramenta', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Ferramenta'])}}


            <?php
                $dis = array();
            ?>

            @foreach($data['disciplina'] as $d)
                <?php
                    $dis[$d->id] = $d->disciplina;
                ?>
            @endforeach

            {{Form::hidden('modal', $data['modal'])}}

            {{Form::select('disciplina', $dis, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Disciplina'])}} <br>
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
            
            @if($data['modal'] == 'false')
            <div class="float-left">
                <a href="/ferramenta" class="btn mt-3 btn-secondary">Voltar</a>
            </div>
            @endif
   		</div>
    {!! Form::close() !!}

@endsection
@elsedesktop
@section('content')

    {!! Form::open(['action' => 'FerramentaController@store', 'method' => 'post']) !!}
        <div class="form-group ml-5 mr-4 mb-5">
            <h2> {{Form::label('ferramenta', 'Nova Ferramenta')}} </h2>
            {{Form::text('ferramenta', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Ferramenta'])}}


            <?php
                $dis = array();
            ?>

            @foreach($data['disciplina'] as $d)
                <?php
                    $dis[$d->id] = $d->disciplina;
                ?>
            @endforeach

            {{Form::hidden('modal', $data['modal'])}}

            {{Form::select('disciplina', $dis, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Disciplina'])}} <br>
            {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
            
            @if($data['modal'] == 'false')
            <div class="float-left">
                <a href="/ferramenta" class="btn mt-3  mb-5 btn-secondary">Voltar</a>
            </div>
            @endif
        </div>
    {!! Form::close() !!}

@endsection
@enddesktop

@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para cadastrar uma nova ferramenta, a fim de ser selecionada futuramente no cadastro de uma atividade.
@endsection