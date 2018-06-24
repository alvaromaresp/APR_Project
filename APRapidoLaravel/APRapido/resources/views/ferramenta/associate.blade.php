@extends('layout.app')

@section('content')

    <div class="form-group mt-5 ml-5 mr-5 mb-5">    
        {!! Form::open(['action' => ['FerramentaController@associate', $data['ferramenta']->id], 'method' => 'post']) !!}
            <?php
                $riscos = array();
            ?>

            <h2> {{Form::label('risco', 'Associar Riscos')}} </h2>
            @foreach($data['riscos'] as $ris)
                <?php
                    array_push($riscos, [$ris->id => $ris->risco])
                ?>
            @endforeach


            {{Form::select('risco', $riscos, ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Risco'])}}
                

            {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <a href="/ferramenta">FINALIZAR</a>

        {!! Form::close() !!}

        @foreach($data['ferramenta']->riscos as $ris)
                    
                    {!!Form::open(['action' => ['FerramentaController@desassociate', $data['ferramenta']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                        <p>{{$ris->risco}}</p>
                        {{Form::hidden('ris', $ris->id)}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

        @endforeach
    </div>

@endsection