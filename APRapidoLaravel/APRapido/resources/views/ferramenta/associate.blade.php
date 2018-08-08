@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/ferramenta"> Cadastrar Ferramentas </a><br>
    > Criar nova Ferramenta</b>
@endsection

@desktop
@section('content')

    <div class="form-group mt-5 ml-5 mr-5">    
        {!! Form::open(['action' => ['FerramentaController@associate', $data['ferramenta']->id], 'method' => 'post']) !!}
            <?php
                $riscos = array();
            ?>

            <h2> {{Form::label('risco', 'Associar Riscos')}} </h2>
            @foreach($data['riscos'] as $ris)
                <?php
                    $riscos[$ris->id] = $ris->risco;
                ?>
            @endforeach 


            {{Form::select('risco', $riscos, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Risco'])}}
                
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <button type="button" class="btn btn-dark mt-3" data-toggle="modal" data-target="#novorisco">
                    Novo Risco 
            </button><br>
            
            <a href="/ferramenta" class="btn mt-3 btn-secondary">Finalizar</a>
            </div>
            <div class="modal fade" id="novorisco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body" id="resposta-modal">
                        <iframe src="/riscos/create/true" width="765" height="500"></iframe>
                    </div>
                </div>
                </div>
            </div>

            

        {!! Form::close() !!}
    <div class="form-group ml-5 mr-5 mb-5">
        @foreach($data['ferramenta']->riscos as $ris)
                    
                    {!!Form::open(['action' => ['FerramentaController@desassociate', $data['ferramenta']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$ris->risco}}</p>
                        {{Form::hidden('ris', $ris->id)}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

        @endforeach
    </div>
    <script>
        $(document).ready(function(){
            $('#novamp').on('hidden.bs.modal', function () {
                location.reload();
            });
        });
    </script>
    

@endsection
@elsedesktop
@section('content')

    <div class="form-group ml-5 mr-3 mb-5">    
        {!! Form::open(['action' => ['FerramentaController@associate', $data['ferramenta']->id], 'method' => 'post']) !!}
            <?php
                $riscos = array();
            ?>

            <h2> {{Form::label('risco', 'Associar Riscos')}} </h2>
            @foreach($data['riscos'] as $ris)
                <?php
                    $riscos[$ris->id] = $ris->risco;
                ?>
            @endforeach 


            {{Form::select('risco', $riscos, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Risco'])}}
                
            <button type="button" class="btn btn-dark float-left" data-toggle="modal" data-target="#novorisco">
                    Novo Risco 
            </button>
            <br><br><br>
            {{Form::submit('Selecionar', ['class' => 'btn btn-success  float-left'])}}
            <br><br>
            <a href="/ferramenta" class="btn btn-secondary float-left">Finalizar</a>
            </div>
            <div class="modal fade" id="novorisco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body" id="resposta-modal">
                        <iframe src="/riscos/create/true" width="325" height="500"></iframe>
                    </div>
                </div>
                </div>
            </div>

            

        {!! Form::close() !!}
        <div class="form-group ml-5 mr-3 mb-5"> 
        @foreach($data['ferramenta']->riscos as $ris)
                    
                    {!!Form::open(['action' => ['FerramentaController@desassociate', $data['ferramenta']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$ris->risco}}</p>
                        {{Form::hidden('ris', $ris->id)}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

        @endforeach
    </div>
    <script>
        $(document).ready(function(){
            $('#novamp').on('hidden.bs.modal', function () {
                location.reload();
            });
        });
    </script>
    

@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    Para cadastrar uma nova ferramenta, ela deve ser associada a um risco. A associação significa que os riscos, previamente cadastrados, selecionados serão eminentes ao utilizar a ferramenta em questão, para isso basta procurá-la no campo "Risco" e clicar em "Selecionar". Se selecionado um risco que não é desejado, basta clicar em "Deletar". Quando terminar de selecionar todos os riscos, basta clicar em "Finalizar".
@endsection