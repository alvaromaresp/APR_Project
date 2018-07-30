@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/apr"> Cadastrar APR </a><br>
    > Criar nova APR: Natureza dos Riscos</b>
@endsection

@section('content')

{!! Form::open(['action' => ['AprController@associateNaturezariscos', $data['apr']->id], 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">

            <?php
                $naturezariscos = array();
            ?>

            <h2> {{Form::label('naturezariscos', 'Naturezas de Risco associadas a Atividade')}} </h2>
            @foreach($data['naturezariscos'] as $nr)
                <?php
                    array_push($naturezariscos, [$nr->id => $nr->natureza_risco])
                ?>
            @endforeach

            {{Form::select('naturezariscos', $naturezariscos, null, ['class' => 'custom-select mt-3 mb-3', 'placeholder' => 'Naturezas de Risco'])}}

            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            {!! Form::close() !!}


            {!! Form::open(['action' => ['AprController@associateChecklistCall', $data['apr']->id]]) !!}
                {{Form::submit('Ir para Checklist',['class' => 'btn btn-secondary mt-3 '])}}
            {!! Form::close() !!}

            @foreach($data['apr']->naturezasriscos as $nr)
                
                {!!Form::open(['action' => ['AprController@desassociateNaturezariscos', $data['apr']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$nr->natureza_risco}}</p>
                    {{Form::hidden('atividade', $nr->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
   		</div>

@endsection