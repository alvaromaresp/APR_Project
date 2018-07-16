@extends('layout.app')

@section('content')

{!! Form::open(['action' => ['AtividadeController@associate', $data['atividade']->id], 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">

            <?php
                $ferramentas = array();
            ?>

            <h2> {{Form::label('ferramenta', 'Associar Ferramentas')}} </h2>
            @foreach($data['ferramentas'] as $fer)
                <?php
                    array_push($ferramentas, [$fer->id => $fer->ferramenta])
                ?>
            @endforeach

            {{Form::select('ferramenta', $ferramentas, ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Medida Preventiva'])}}

    
            {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <a href="/atividades">FINALIZAR</a>
            {!! Form::close() !!}

            @foreach($data['atividade']->ferramentas as $fer)
                
                {!!Form::open(['action' => ['AtividadeController@desassociate', $data['atividade']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$fer->ferramenta}}</p>
                    {{Form::hidden('ferramenta', $fer->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
   		</div>

@endsection