@extends('layout.app')

@section('content')

    <div class="form-group mt-5 ml-5 mr-5 mb-5">    
        {!! Form::open(['action' => ['FerramentaController@associate', $data['ferramenta']->id], 'method' => 'post']) !!}
            <?php
                $riscos = array();
            ?>

            <h2> {{Form::label('risco', 'Riscos associados a')}} </h2>
            @foreach($data['riscos'] as $ris)
                <?php
                    array_push($riscos, [$ris->id => $ris->risco])
                ?>
            @endforeach 


            {{Form::select('risco', $riscos, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Risco'])}}
                

            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <a href="/ferramenta" class="btn mt-3 btn-secondary">Finalizar</a>

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

@extends('layout.flutuante')
@section('conteudo')
    Para cadastrar uma nova ferramenta, ela deve ser associada a um risco. A associação significa que os riscos, previamente cadastrados, selecionados serão eminentes ao utilizar a ferramenta em questão, para isso basta procurá-la no campo "Risco" e clicar em "Selecionar". Se selecionado um risco que não é desejado, basta clicar em "Deletar". Quando terminar de selecionar todos os riscos, basta clicar em "Finalizar".
@endsection