@extends('layout.app')

@section('content')

    <div class="form-group mt-5 ml-5 mr-5 mb-5">    
        {!! Form::open(['action' => ['RiscosController@associate', $data['risco']->id], 'method' => 'post']) !!}
            <?php
                $mps = array();
            ?>

            <h2> {{Form::label('medidaPreventiva', 'Associar Medida Preventiva')}} </h2>
            @foreach($data['mp'] as $mp)
                <?php
                    array_push($mps, [$mp->id => $mp->medidapreventiva])
                ?>
            @endforeach


            {{Form::select('medidaPreventiva', $mps, ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Medida Preventiva'])}}
                

            {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <a href="/riscos">FINALIZAR</a>

        {!! Form::close() !!}

        @foreach($data['risco']->medidaspreventivas as $mp)
                    
                    {!!Form::open(['action' => ['RiscosController@desassociate', $data['risco']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$mp->medidapreventiva}}</p>
                        {{Form::hidden('mp', $mp->id)}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

        @endforeach
    </div>

@endsection