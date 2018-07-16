@extends('layout.app')

@section('content')

{!! Form::open(['action' => ['AprController@update', $data['apr']->id], 'method' => 'post']) !!}
    <div class="form-group mt-5 ml-5 mr-5 mb-5">
        <h2> {{Form::label('nome', 'Nova APR')}} </h2>
        {{Form::text('nome', $data['apr']->nome, ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Nome'])}}
        {{Form::text('celula', $data['apr']->celula, ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Celula'])}}
        {{Form::text('telr', $data['apr']->telr, ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Telr'])}}

        <?php
            $emp = array();
        ?>

        @foreach($data['empresa'] as $e)
            <?php
                array_push($emp, [$e->id => $e->empresa])
            ?>
        @endforeach

        {{Form::select('empresa', $emp, $data['apr']->empresa_id, ['placeholder' => 'Empresa'])}}

        <?php
            $ses = array();
        ?>

        @foreach($data['sesmt'] as $s)
            <?php
                array_push($ses, [$s->id => $s->nome])
            ?>
        @endforeach

        {{Form::select('sesmt', $ses, $data['apr']->sesmt_id, ['placeholder' => 'Sesmt'])}}

        <?php
            $coo = array();
        ?>

        @foreach($data['coordena'] as $c)
            <?php
                array_push($coo, [$c->id => $c->nome])
            ?>
        @endforeach

        {{Form::select('coordena', $coo, $data['apr']->coordena_id, ['placeholder' => 'Coordena'])}}

        <?php
            $ar = array();
        ?>

        @foreach($data['area'] as $a)
            <?php
                array_push($ar, [$a->id => $a->nome])
            ?>
        @endforeach

        {{Form::select('area', $ar, $data['apr']->area_id, ['placeholder' => 'Area'])}}

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   </div>
{!! Form::close() !!}

@endsection