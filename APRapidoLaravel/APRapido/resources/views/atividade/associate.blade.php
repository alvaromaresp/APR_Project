@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/atividades"> Cadastrar Atividades </a><br>
    > Criar nova Atividade</b>
@endsection

@desktop
@section('content')

{!! Form::open(['action' => ['AtividadeController@associateStore', $data['atividade']->id], 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">

            <?php
                $ferramentas = array();
                $find = false;
            ?>

            <h2> {{Form::label('ferramenta', 'Associar Ferramentas')}} </h2>
            @foreach($data['ferramentas'] as $fer)
                <?php
                    $find = false;
                ?>
                @foreach($data['atividade']->ferramentas as $ferass)
                    <?php
                        if($fer->id == $ferass->id)
                            $find = true;
                    ?>
                @endforeach
                <?php
                    if(!$find)
                    $ferramentas[$fer->id] = $fer->ferramenta;
                ?>
            @endforeach
    

            {{Form::select('ferramenta', $ferramentas, null, ['class' => 'custom-select mt-3 mb-3', 'placeholder' => 'Ferramenta'])}}

            
    
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            

                <a href="/atividades" class="btn mt-3 btn-secondary">Finalizar</a>


            <button type="button" class="btn btn-dark float-left mt-3 mr-2" data-toggle="modal" data-target="#novaferramenta">
                Nova Ferramenta 
            </button>

            <div class="modal fade" id="novaferramenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body" id="resposta-modal">
                        <iframe id="iframe" src="/ferramenta/create/modal" width="765" height="500"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="close btn-secondary" data-dismiss="modal" aria-label="Close">
                            Finalizar
                        </button>
                    </div>
                </div>
                </div>
            </div>
            
            {!! Form::close() !!}

            @foreach($data['atividade']->ferramentas as $fer)
                
                {!!Form::open(['action' => ['AtividadeController@desassociate', $data['atividade']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$fer->ferramenta}}</p>

                    {{Form::hidden('ferramenta', $fer->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
           </div>
           
        <script>
            $(document).ready(function(){
                $('#novaferramenta').on('hidden.bs.modal', function () {
                    location.reload();
                });
                $('#novaferramenta').on('shown.bs.modal', function () {
                    document.getElementById('iframe').contentDocument.location.reload(true);
                });
            });
        </script>

@endsection
@elsedesktop
@section('content')

{!! Form::open(['action' => ['AtividadeController@associateStore', $data['atividade']->id], 'method' => 'post']) !!}
        <div class="form-group ml-5 mr-3 mb-5">

             <?php
                $ferramentas = array();
                $find = false;
            ?>

            <h2> {{Form::label('ferramenta', 'Associar Ferramentas')}} </h2>
            @foreach($data['ferramentas'] as $fer)
                <?php
                    $find = false;
                ?>
                @foreach($data['atividade']->ferramentas as $ferass)
                    <?php
                        if($fer->id == $ferass->id)
                            $find = true;
                    ?>
                @endforeach
                <?php
                    if(!$find)
                    $ferramentas[$fer->id] = $fer->ferramenta;
                ?>
            @endforeach

            {{Form::select('ferramenta', $ferramentas, null, ['class' => 'custom-select mt-3 mb-3', 'placeholder' => 'Ferramenta'])}}


    
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3'])}} <br>
            

                <a href="/atividades" class="btn btn-secondary mt-3">Finalizar</a>

            <br>
            <button type="button" class="btn btn-dark float-left mt-3" data-toggle="modal" data-target="#novaferramenta">
                Nova Ferramenta 
            </button><br>

            <div class="modal fade" id="novaferramenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body" id="resposta-modal">
                        <iframe id="iframe" src="/ferramenta/create/modal" width="325" height="500"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="close btn-secondary" data-dismiss="modal" aria-label="Close">
                            Finalizar
                        </button>
                    </div>
                </div>
                </div>
            </div>
            
            {!! Form::close() !!}

            @foreach($data['atividade']->ferramentas as $fer)
                
                {!!Form::open(['action' => ['AtividadeController@desassociate', $data['atividade']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$fer->ferramenta}}</p>

                    {{Form::hidden('ferramenta', $fer->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
        </div>

        <script>
            $(document).ready(function(){
                $('#novaferramenta').on('hidden.bs.modal', function () {
                    location.reload();
                });
                $('#novaferramenta').on('shown.bs.modal', function () {
                    document.getElementById('iframe').contentDocument.location.reload(true);
                });
            });
        </script>

@endsection
@enddesktop

@extends('layout.flutuante')
@section('conteudo')
    Para cadastrar uma nova atividade, ela deve ser associada a uma ferramenta. A associação significa que as ferramentas, previamente cadastrada, selecionadas serão utilizadas ao executar a atividade em questão, para isso basta procurá-la no campo "Ferramenta" e clicar em "Selecionar". Se selecionada uma ferramenta que não é desejada, basta clicar em "Deletar". Quando terminar de selecionar todas as ferramentas, basta clicar em "Finalizar".
@endsection