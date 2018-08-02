@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/apr"> Cadastrar APR </a><br>
    > Criar nova APR</b>
@endsection

@section('content')

{!! Form::open(['action' => ['AprController@associateAtividade', $data['apr']->id], 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">

            <?php
                $atividades = array();
            ?>

            <h2> {{Form::label('atividade', 'Atividades associadas a APR')}} </h2>
            @foreach($data['atividade'] as $at)
                <?php
                    $atividades[$at->id] = $at->atividade;
                ?>
            @endforeach

            {{Form::select('atividade', $atividades, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Atividades'])}}

            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            {!! Form::close() !!}


            {!! Form::open(['action' => ['AprController@associateNaturezariscosCall', $data['apr']->id], 'method' => 'post']) !!}
                {{Form::submit('Ir para Natureza Risco',['class' => 'mt-3 btn btn-secondary'])}}
            {!! Form::close() !!}

            @foreach($data['apr']->atividades as $at)
                
                {!!Form::open(['action' => ['AprController@desassociateAtividade', $data['apr']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$at->atividade}}</p>
                    {{Form::hidden('atividade', $at->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
   		</div>

@endsection

@extends('layout.flutuante')
@section('conteudo')
    Para cadastrar uma nova APR, ela deve ser associada a uma atividade. A associação significa que as atividades, previamente cadastrada, selecionadas serão utilizadas ao executar a tarefa da APR em questão, para isso basta procurá-la no campo "Atividades" e clicar em "Selecionar". Se selecionada uma atividade que não é desejada, basta clicar em "Deletar". Quando terminar de selecionar todas as atividades, basta clicar em "Ir para Natureza de Risco".
@endsection