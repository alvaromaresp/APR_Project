@extends('layout.modal')
@desktop
@section('content')

    <div class="form-group mt-5 ml-5 mr-5">    
       {!! Form::open(['action' => ['FerramentaController@associateStore', $data['ferramenta']->id], 'method' => 'post']) !!}
            <?php
                $riscos = array();
                $find = false;
            ?>

            <h2> {{Form::label('risco', 'Associar Riscos')}} </h2>
            @foreach($data['riscos'] as $ris)
                <?php
                    $find = false;
                ?>
                @foreach($data['ferramenta']->riscos as $risass)
                    <?php
                        if($ris->id == $risass)
                            $find = true;
                    ?>
                @endforeach
                <?php
                    if(!$find)
                        $riscos[$ris->id] = $ris->risco;
                ?>
            @endforeach  


            {{Form::select('risco', $riscos, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Risco'])}}
                
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}} <br>

            </div>
            
            {{Form::hidden('redirect', "/ferramenta/associate/modal/")}}
        {!! Form::close() !!}
    <div class="form-group ml-5 mr-5 mb-5">
        @foreach($data['ferramenta']->riscos as $ris)
                    
                    {!!Form::open(['action' => ['FerramentaController@desassociate', $data['ferramenta']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$ris->risco}}</p>
                        {{Form::hidden('ris', $ris->id)}}
                        {{Form::hidden('redirect', "/ferramenta/associate/modal/")}}
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
                
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}} <br>
            </div>

            {{Form::hidden('redirect', "/ferramenta/associate/modal/")}}
        {!! Form::close() !!}
    <div class="form-group ml-5 mr-5 mb-5">
        @foreach($data['ferramenta']->riscos as $ris)
                    
                    {!!Form::open(['action' => ['FerramentaController@desassociate', $data['ferramenta']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$ris->risco}}</p>
                        {{Form::hidden('ris', $ris->id)}}
                        {{Form::hidden('redirect', "/ferramenta/associate/modal/")}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

        @endforeach
    </div>
    
@endsection
@enddesktop
