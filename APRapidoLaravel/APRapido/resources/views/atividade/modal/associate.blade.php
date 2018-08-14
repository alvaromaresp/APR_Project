@extends('layout.modal')
@desktop
@section('content')

{!! Form::open(['action' => ['AtividadeController@associateStore', $data['atividade']->id], 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">

            <?php
                $ferramentas = array();
            ?>

            <h2> {{Form::label('ferramenta', 'Associar Ferramentas')}} </h2>
            @foreach($data['ferramentas'] as $fer)
                <?php
                    $ferramentas[$fer->id] = $fer->ferramenta;
                ?>
            @endforeach

            {{Form::select('ferramenta', $ferramentas, null, ['class' => 'custom-select mt-3 mb-3', 'placeholder' => 'Ferramenta'])}}

            {{Form::hidden('redirect', "/atividades/associate/modal/")}}
    
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            
             
            {!! Form::close() !!}

            @foreach($data['atividade']->ferramentas as $fer)
                
                {!!Form::open(['action' => ['AtividadeController@desassociate', $data['atividade']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$fer->ferramenta}}</p>
                    {{Form::hidden('redirect', "/atividades/associate/modal/")}}
                    {{Form::hidden('ferramenta', $fer->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
           </div>

@endsection
@elsedesktop
@section('content')

{!! Form::open(['action' => ['AtividadeController@associateStore', $data['atividade']->id], 'method' => 'post']) !!}
        <div class="form-group ml-5 mr-3 mb-5">

              <?php
                $ferramentas = array();
            ?>

            <h2> {{Form::label('ferramenta', 'Associar Ferramentas')}} </h2>
            @foreach($data['ferramentas'] as $fer)
                <?php
                    $ferramentas[$fer->id] = $fer->ferramenta;
                ?>
            @endforeach

            {{Form::select('ferramenta', $ferramentas, null, ['class' => 'custom-select mt-3 mb-3', 'placeholder' => 'Ferramenta'])}}

            {{Form::hidden('redirect', "/atividades/associate/modal/")}}
    
            {{Form::submit('Selecionar', ['class' => 'btn btn-success mt-3 float-right'])}}
            
            
            {!! Form::close() !!}

            @foreach($data['atividade']->ferramentas as $fer)
                
                {!!Form::open(['action' => ['AtividadeController@desassociate', $data['atividade']->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$fer->ferramenta}}</p>
                    {{Form::hidden('redirect', "/atividades/associate/modal/")}}
                    {{Form::hidden('ferramenta', $fer->id)}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach
           </div>
@endsection
@enddesktop

