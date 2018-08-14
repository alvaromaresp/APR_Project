@extends('layout.modal')
@desktop
    @section('content')
    {!! Form::open(['action' => ['AtividadeController@store'], 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('atividade', 'Nova Atividade')}} </h2>
            {{Form::text('atividade', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Atividade'])}}
            
            <?php
                $dis = array(); 
            ?>
            {{Form::hidden('redirect', "/atividades/associate/modal/")}}

            @foreach($data['disciplina'] as $d)
                <?php
                    $dis [$d->id] = $d->disciplina;
                ?>
            @endforeach

            {{Form::select('disciplina', $dis, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Disciplina'])}}

            <?php
                $emp = array();
            ?>

            @foreach($data['empresa'] as $e)
                <?php
                    $emp[$e->id] = $e->empresa;
                ?>
            @endforeach

            {{Form::select('empresa', $emp, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Empresa'])}}

            {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
        </div>
    {!! Form::close() !!}

    @endsection
@elsedesktop
    @section('content')
    {!! Form::open(['action' => ['AtividadeController@store'], 'method' => 'post']) !!}
        <div class="form-group ml-5 mr-3 mb-5">
            <h2> {{Form::label('atividade', 'Nova Atividade')}} </h2>
            {{Form::text('atividade', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Atividade'])}}
            
            <?php
                $dis = array(); 
            ?>
            {{Form::hidden('redirect', "/atividades/associate/modal/")}}

            @foreach($data['disciplina'] as $d)
                <?php
                    $dis [$d->id] = $d->disciplina;
                ?>
            @endforeach

            {{Form::select('disciplina', $dis, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Disciplina'])}}

            <?php
                $emp = array();
            ?>

            @foreach($data['empresa'] as $e)
                <?php
                    $emp[$e->id] = $e->empresa;
                ?>
            @endforeach

            {{Form::select('empresa', $emp, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Empresa'])}}

            {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 mb-5 float-right'])}}
        </div>
    {!! Form::close() !!}

    @endsection
@enddesktop
