@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/riscos"> Cadastrar Riscos </a><br>
    > Criar novo Risco</b>
@endsection 

@section('content')

    <div class="form-group mt-5 ml-5 mr-5 mb-5">    
        {!! Form::open(['action' => ['RiscosController@associate', $data['risco']->id], 'method' => 'post']) !!}
            <?php
                $mps = array();
            ?>

            <h2> {{Form::label('medidaPreventiva', 'Medida Preventiva associada ao risco')}} </h2>
            @foreach($data['mp'] as $mp)
                <?php
                    $mps[$mp->id] = $mp->medidapreventiva;
                ?>
            @endforeach


            {{Form::select('medidaPreventiva', $mps, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Medida Preventiva'])}}
                

            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <a href="/riscos" class="btn mt-3 btn-secondary">Finalizar</a>

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

@extends('layout.flutuante')
@section('conteudo')
    Para cadastrar um novo risco, ele deve ser associado a uma medida preventiva. A associação significa que as medidas preventivas, previamente cadastradas, selecionadas são necessárias para evirar o risco em questão, para isso basta procurá-la no campo "Medida Preventiva" e clicar em "Selecionar". Se selecionada uma medida preventiva que não é desejada, basta clicar em "Deletar". Quando terminar de selecionar todas as medidas preventivas, basta clicar em "Finalizar".
@endsection