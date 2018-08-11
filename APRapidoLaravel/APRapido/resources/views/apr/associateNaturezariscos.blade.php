@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/apr"> Cadastrar APR </a><br>
    > Criar nova APR: Natureza dos Riscos</b>
@endsection
 
@desktop
@section('content')

{!! Form::open(['action' => ['AprController@associateNaturezariscos', $data['apr']->id], 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">

            <?php
                $naturezariscos = array();
            ?>

            <h2> {{Form::label('naturezariscos', 'Naturezas de Risco associadas a Atividade')}} </h2>
            @foreach($data['naturezariscos'] as $nr)
                <?php
                    $naturezariscos[$nr->id] = $nr->natureza_risco;
                ?>
            @endforeach

            {{Form::select('naturezariscos', $naturezariscos, null, ['class' => 'custom-select mt-3 mb-3', 'placeholder' => 'Naturezas de Risco'])}}

            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            {!! Form::close() !!}



                <a href="../associateChecklistCall/{{$data['apr']->id}}"> <button  type="button" class="btn btn-secondary mt-3">Ir para Checklist</button></a>

            @foreach($data['apr']->naturezasriscos as $nr)
                
                {!!Form::open(['action' => ['AprController@desassociateNaturezariscos', $data['apr']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$nr->natureza_risco}}</p>
                    {{Form::hidden('atividade', $nr->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
   		</div>

@endsection
@elsedesktop
@section('content')

{!! Form::open(['action' => ['AprController@associateNaturezariscos', $data['apr']->id], 'method' => 'post']) !!}
        <div class="form-group ml-5 mr-4 mb-5">

            <?php
                $naturezariscos = array();
            ?>

            <h2> {{Form::label('naturezariscos', 'Naturezas de Risco associadas a Atividade')}} </h2>
            @foreach($data['naturezariscos'] as $nr)
                <?php
                    $naturezariscos[$nr->id] = $nr->natureza_risco;
                ?>
            @endforeach

            {{Form::select('naturezariscos', $naturezariscos, null, ['class' => 'custom-select mt-3 mb-3', 'placeholder' => 'Naturezas de Risco'])}}

            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            {!! Form::close() !!}



                <a href="../associateChecklistCall/{{$data['apr']->id}}"> <button  type="button" class="btn btn-secondary mt-3">Ir para Checklist</button></a>

            @foreach($data['apr']->naturezasriscos as $nr)
                
                {!!Form::open(['action' => ['AprController@desassociateNaturezariscos', $data['apr']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$nr->natureza_risco}}</p>
                    {{Form::hidden('atividade', $nr->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
        </div>

@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    O documento APR tem a identificação das Naturezas de Risco que a tarefa a ser executada pode oferecer. Para associá-las com a tarefa, basta procurar a Natureza de Risco em questão no campo "Naturezas de Risco" e clicar em "Selecionar". Se selecionada uma natureza de risco que não é desejada, basta clicar em "Deletar". Quando terminar de selecionar todas as naturezas de risco, basta clicar em "Ir para Checklist".
@endsection