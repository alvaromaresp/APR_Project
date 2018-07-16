@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['AtividadeController@update', $data['atividade']->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('atividade', 'Editar Atividade')}} </h2>	
            {{Form::text('atividade', $data['atividade']->atividade, ['class' => 'form-control', 'placeholder' => 'Atividade'])}}
            <?php
                $dis = array();
            ?>

            @foreach($data['disciplina'] as $d)
                <?php
                    array_push($dis, [$d->id => $d->disciplina])
                ?>
            @endforeach

            {{Form::select('disciplina', $dis)}}

            <?php
                $emp = array();
            ?>

            @foreach($data['empresa'] as $e)
                <?php
                    array_push($emp, [$e->id => $e->empresa])
                ?>
            @endforeach

            {{Form::select('empresa', $emp)}}
            
            {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection