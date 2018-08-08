@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/apr"> Cadastrar APR </a><br>
    > Criar nova APR</b>
@endsection

@desktop
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
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#novaatividade">
               Nova Atividade
            </button>

            @foreach($data['apr']->atividades as $at)
                
                {!!Form::open(['action' => ['AprController@desassociateAtividade', $data['apr']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$at->atividade}}</p>
                    {{Form::hidden('atividade', $at->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
        
           
        </div>
        <div class="modal fade" id="novaatividade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" id="resposta-modal">
                    <iframe src="/atividades/create/true" width="765" height="500"></iframe>
                </div>
              </div>
            </div>
        </div>
        
            <script>
                $(document).ready(function(){
                    $('#novaatividade').on('hidden.bs.modal', function () {
                        location.reload();
                    });
                });
            </script>

@endsection
@elsedesktop
@section('content')

{!! Form::open(['action' => ['AprController@associateAtividade', $data['apr']->id], 'method' => 'post']) !!}
        <div class="form-group ml-5 mr-4 mb-5">

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

            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-left'])}}
            {!! Form::close() !!}


            {!! Form::open(['action' => ['AprController@associateNaturezariscosCall', $data['apr']->id], 'method' => 'post']) !!}
                {{Form::submit('Ir para Natureza Risco',['class' => 'mt-3 btn btn-secondary'])}}
            {!! Form::close() !!}

            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#novaatividade">
               Nova Atividade
            </button>
            @foreach($data['apr']->atividades as $at)
                
                {!!Form::open(['action' => ['AprController@desassociateAtividade', $data['apr']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$at->atividade}}</p>
                    {{Form::hidden('atividade', $at->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
        
        
        </div>
        <div class="modal fade" id="novaatividade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" id="resposta-modal">
                    <iframe src="/atividades/create/true" width="325" height="500"></iframe>
                </div>
              </div>
            </div>
        </div>
        
            <script>
                $(document).ready(function(){
                    $('#novaatividade').on('hidden.bs.modal', function () {
                        location.reload();
                    });
                });
            </script>

@endsection
@enddesktop

@extends('layout.flutuante')
@section('conteudo')
    Para cadastrar uma nova APR, ela deve ser associada a uma atividade. A associação significa que as atividades, previamente cadastrada, selecionadas serão utilizadas ao executar a tarefa da APR em questão, para isso basta procurá-la no campo "Atividades" e clicar em "Selecionar". Se selecionada uma atividade que não é desejada, basta clicar em "Deletar". Quando terminar de selecionar todas as atividades, basta clicar em "Ir para Natureza de Risco".
@endsection