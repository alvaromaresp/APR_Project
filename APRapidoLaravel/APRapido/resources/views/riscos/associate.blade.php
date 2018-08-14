@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/riscos"> Cadastrar Riscos </a><br>
    > Criar novo Risco</b>
@endsection 

@desktop
@section('content')

    <div class="form-group mt-5 ml-5 mr-5">    
        {!! Form::open(['action' => ['RiscosController@associateStore', $data['risco']->id], 'method' => 'post']) !!}
            <?php
                $mps = array();
            ?>

            <h2> {{Form::label('medidaPreventiva', 'Associar Medida Preventiva')}} </h2>
            @foreach($data['mp'] as $mp)
                <?php
                    $mps[$mp->id] = $mp->medidapreventiva;
                ?>
            @endforeach


            {{Form::select('medidaPreventiva', $mps, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Medida Preventiva'])}}
                
            <button type="button" class="btn btn-dark mt-3" data-toggle="modal" data-target="#novamp">
                Nova MP 
            </button>
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}


            <a href="/riscos" class="btn mt-3 btn-secondary">Finalizar</a>
            
            </div>
            <div class="modal fade" id="novamp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body" id="resposta-modal">
                        <iframe id="iframe" src="/medidaPreventiva/create/modal" width="765" height="500"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="close btn btn-secondary" data-dismiss="modal" aria-label="Close">
                            Finalizar
                        </button>
                    </div>
                </div>
                </div>
            </div>


            

        {!! Form::close() !!}
        <div class="ml-5 mr-5 mb-5">
        @foreach($data['risco']->medidaspreventivas as $mp)
                    
                    {!!Form::open(['action' => ['RiscosController@desassociate', $data['risco']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$mp->medidapreventiva}}</p>

                        {{Form::hidden('mp', $mp->id)}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

        @endforeach
    </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#novamp').on('hidden.bs.modal', function () {
                location.reload();
            });
            
            $('#novamp').on('shown.bs.modal', function () {
                document.getElementById('iframe').contentDocument.location.reload(true);
            });
        });
    </script>

@endsection
@elsedesktop
@section('content')

    <div class="form-group ml-5 mr-3">    
        {!! Form::open(['action' => ['RiscosController@associateStore', $data['risco']->id], 'method' => 'post']) !!}
            <?php
                $mps = array();
            ?>

            <h2> {{Form::label('medidaPreventiva', 'Associar Medida Preventiva')}} </h2>
            @foreach($data['mp'] as $mp)
                <?php
                    $mps[$mp->id] = $mp->medidapreventiva;
                ?>
            @endforeach


            {{Form::select('medidaPreventiva', $mps, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Medida Preventiva'])}}
            
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3'])}}<br> 
            <button type="button" class="btn btn-dark mt-3" data-toggle="modal" data-target="#novamp">
                Nova MP 
            </button>
            


            <a href="/riscos" class="btn mt-3 btn-secondary">Finalizar</a>
            
            </div>
            <div class="modal fade" id="novamp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body" id="resposta-modal">
                        <iframe id="iframe" src="/medidaPreventiva/create/true" width="325" height="500"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="close btn btn-secondary" data-dismiss="modal" aria-label="Close">
                            Finalizar
                        </button>
                    </div>
                </div>
                </div>
            </div>


            

        {!! Form::close() !!}
        <div class="ml-5 mr-5 mb-5">
        @foreach($data['risco']->medidaspreventivas as $mp)
                    
                    {!!Form::open(['action' => ['RiscosController@desassociate', $data['risco']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$mp->medidapreventiva}}</p>

                        {{Form::hidden('mp', $mp->id)}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

        @endforeach
    </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#novamp').on('hidden.bs.modal', function () {
                location.reload();
            });
            $('#novamp').on('shown.bs.modal', function () {
                document.getElementById('iframe').contentDocument.location.reload(true);
            });
        });
    </script>
@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    Para cadastrar um novo risco, ele deve ser associado a uma medida preventiva. A associação significa que as medidas preventivas, previamente cadastradas, selecionadas são necessárias para evirar o risco em questão, para isso basta procurá-la no campo "Medida Preventiva" e clicar em "Selecionar". Se selecionada uma medida preventiva que não é desejada, basta clicar em "Deletar". Quando terminar de selecionar todas as medidas preventivas, basta clicar em "Finalizar".
@endsection