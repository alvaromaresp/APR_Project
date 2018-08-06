@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/ferramenta"> Cadastrar Ferramentas </a><br>
    > Editar Ferramenta: {{$data['ferramenta']->ferramenta}} </b>
@endsection

@section('content')

    {!! Form::open(['action' => ['FerramentaController@update', $data['ferramenta']->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('ferramenta', 'Editar Ferramenta')}} </h2>	
            {{Form::text('ferramenta', $data['ferramenta']->ferramenta, ['class' => 'form-control mb-3', 'placeholder' => 'Ferramenta'])}}
 
            
            <?php
                $dis = array();
            ?>

            @foreach($data['disciplina'] as $d)
                <?php
                    ($dis, [$d->id => $d->disciplina])
                ?>
            @endforeach

            {{Form::select('disciplina', $dis, null,  ['class' => 'custom-select mb-3', 'placeholder' => 'Disciplina'])}}
            {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <div class="float-left">
                <a href="/ferramenta" class="btn mt-3 btn-secondary">Voltar</a>
            </div>
		</div>
    {!! Form::close() !!}

@endsection

@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para editar a informação, a fim de deixa-la mais precisa, para que ela seja selecionada futuramente na montagem da APR.
@endsection