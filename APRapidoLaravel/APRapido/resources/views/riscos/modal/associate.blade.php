@extends('layout.modal')

@desktop
@section('content')

    <div class="form-group mt-5 ml-5 mr-5">    
        {!! Form::open(['action' => ['RiscosController@associateStore', $data['risco']->id], 'method' => 'post']) !!}
            <?php
                $mps = array();
                $find = false;
            ?>

            <h2> {{Form::label('medidaPreventiva', 'Associar Medida Preventiva')}} </h2>
            @foreach($data['mp'] as $mp)
                <?php
                    $find = false;
                ?>
                @foreach($data['risco']->medidaspreventivas as $mpass)
                    <?php
                        if($mp->id == $mpass->id)
                            $find = true;
                    ?>
                @endforeach
                <?php
                    if(!$find)
                        $mps[$mp->id] = $mp->medidapreventiva;
                ?>
            @endforeach


            {{Form::select('medidaPreventiva', $mps, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Medida Preventiva'])}}
                
            <button type="button" class="btn btn-dark mt-3" data-toggle="modal" data-target="#novamp">
                Nova MP 
            </button>
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            {{Form::hidden('redirect', "/riscos/associate/modal/")}}
            
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
                        <iframe id="iframe" src="/medidaPreventiva/create/modal" width="475" height="300"></iframe>
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

    <div class="form-group mt-5 ml-5 mr-5">    
        {!! Form::open(['action' => ['RiscosController@associateStore', $data['risco']->id], 'method' => 'post']) !!}
            <?php
                $mps = array();
                $find = false;
            ?>

            <h2> {{Form::label('medidaPreventiva', 'Associar Medida Preventiva')}} </h2>
            @foreach($data['mp'] as $mp)
                <?php
                    $find = false;
                ?>
                @foreach($data['risco']->medidaspreventivas as $mpass)
                    <?php
                        if($mp->id == $mpass->id)
                            $find = true;
                    ?>
                @endforeach
                <?php
                    if(!$find)
                        $mps[$mp->id] = $mp->medidapreventiva;
                ?>
            @endforeach


            {{Form::select('medidaPreventiva', $mps, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Medida Preventiva'])}}
                
            <button type="button" class="btn btn-dark mt-3" data-toggle="modal" data-target="#novamp">
                Nova MP 
            </button>
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            {{Form::hidden('redirect', "/riscos/associate/modal/")}}
            
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
                        <iframe id="iframe" src="/medidaPreventiva/create/modal" width="475" height="300"></iframe>
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