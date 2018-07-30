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
                    array_push($atividades, [$at->id => $at->atividade])
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