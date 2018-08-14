@extends('layout.modal')
@section('content')

    <div class="form-group mt-5 ml-5 mr-5">    
       {!! Form::open(['action' => ['FerramentaController@associateStore', $data['ferramenta']->id], 'method' => 'post']) !!}
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
                
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3'])}} <br>

            <a href="/ferramenta" class="btn mt-3 btn-secondary">Finalizar</a><br>
            </div>
            
            {{Form::hidden('redirect', "ME MODIFIQUE")}}
        {!! Form::close() !!}
    <div class="form-group ml-5 mr-5 mb-5">
        @foreach($data['ferramenta']->riscos as $ris)
                    
                    {!!Form::open(['action' => ['FerramentaController@desassociate', $data['ferramenta']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$ris->risco}}</p>
                        {{Form::hidden('ris', $ris->id)}}
                        {{Form::hidden('redirect', "ME MODIFIQUE")}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

        @endforeach
@endsection
@elsedesktop
@section('content')

    <div class="form-group ml-5 mr-3 mb-5">    
        {!! Form::open(['action' => ['FerramentaController@associateStore', $data['ferramenta']->id], 'method' => 'post']) !!}
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
                
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3'])}} <br>

            <a href="/ferramenta" class="btn mt-3 btn-secondary">Finalizar</a><br>
            </div>
            
           {{Form::hidden('redirect', "ME MODIFIQUE")}}
        {!! Form::close() !!}
    <div class="form-group ml-5 mr-5 mb-5">
        @foreach($data['ferramenta']->riscos as $ris)
                    
                    {!!Form::open(['action' => ['FerramentaController@desassociate', $data['ferramenta']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$ris->risco}}</p>
                        {{Form::hidden('ris', $ris->id)}}
                        {{Form::hidden('redirect', "ME MODIFIQUE")}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

        @endforeach
    </div>
    
@endsection
@enddesktop