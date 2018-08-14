@extends('layout.modal')

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
                
            <a href="/riscos" class="btn mt-3 btn-secondary">Finalizar</a>
            
    </div> 

        {!! Form::close() !!}
        <div class="ml-5 mr-5 mb-5">
        @foreach($data['risco']->medidaspreventivas as $mp)
                    
                    {!!Form::open(['action' => ['RiscosController@desassociate', $data['risco']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$mp->medidapreventiva}}</p>
                        {{Form::hidden('redirect', "ME MODIFIQUE")}}
                        {{Form::hidden('mp', $mp->id)}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

        @endforeach
    </div>

@endsection
@elsedesktop
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
                
            <a href="/riscos" class="btn mt-3 btn-secondary">Finalizar</a>
            
    </div>

        {!! Form::close() !!}
        <div class="ml-5 mr-3 mb-5">
        @foreach($data['risco']->medidaspreventivas as $mp)
                    
                    {!!Form::open(['action' => ['RiscosController@desassociate', $data['risco']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$mp->medidapreventiva}}</p>
                        {{Form::hidden('redirect', "ME MODIFIQUE")}}
                        {{Form::hidden('mp', $mp->id)}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

        @endforeach
    </div>

@endsection
@enddesktop