@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/atividades"> Cadastrar Atividades </a><br>
    > Criar nova Atividade</b>
@endsection

@section('content')

{!! Form::open(['action' => ['AtividadeController@associate', $data['atividade']->id], 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">

            <?php
                $ferramentas = array();
            ?>

            <h2> {{Form::label('ferramenta', 'Associar Ferramentas')}} </h2>
            @foreach($data['ferramentas'] as $fer)
                <?php
                    array_push($ferramentas, [$fer->id => $fer->ferramenta])
                ?>
            @endforeach

            {{Form::select('ferramenta', $ferramentas, null, ['class' => 'custom-select mt-3 mb-3', 'placeholder' => 'Ferramenta'])}}

    
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <a href="/atividades" class="btn mt-3 btn-secondary">Finalizar</a>
            {!! Form::close() !!}

            @foreach($data['atividade']->ferramentas as $fer)
                
                {!!Form::open(['action' => ['AtividadeController@desassociate', $data['atividade']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$fer->ferramenta}}</p>
                    {{Form::hidden('ferramenta', $fer->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
   		</div>

@endsection

@extends('layout.flutuante')
@section('conteudo')
    Para cadastrar uma nova atividade, ela deve ser associada a uma ferramenta. A associação significa que as ferramentas, previamente cadastrada, selecionadas serão utilizadas ao executar a atividade em questão, para isso basta procurá-la no campo "Ferramenta" e clicar em "Selecionar". Se selecionada uma ferramenta que não é desejada, basta clicar em "Deletar". Quando terminar de selecionar todas as ferramentas, basta clicar em "Finalizar".
@endsection