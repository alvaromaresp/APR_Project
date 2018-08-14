@extends('layout.modal')
@desktop
@section('content')

    {!! Form::open(['action' => 'FerramentaController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('ferramenta', 'Nova Ferramenta')}} </h2>
            {{Form::text('ferramenta', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Ferramenta'])}}


            <?php
                $dis = array();
            ?>
 
            @foreach($data['disciplina'] as $d)
                <?php
                    $dis[$d->id] = $d->disciplina;
                ?>
            @endforeach

            {{Form::hidden('redirect', "ferramenta/associate/modal/")}}

            {{Form::select('disciplina', $dis, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Disciplina'])}} <br>
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   		</div>
    {!! Form::close() !!}

@endsection
@elsedesktop
@section('content')

    {!! Form::open(['action' => 'FerramentaController@store', 'method' => 'post']) !!}
        <div class="form-group ml-5 mr-4 mb-5">
            <h2> {{Form::label('ferramenta', 'Nova Ferramenta')}} </h2>
            {{Form::text('ferramenta', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Ferramenta'])}}


            <?php
                $dis = array();
            ?>

            @foreach($data['disciplina'] as $d)
                <?php
                    $dis[$d->id] = $d->disciplina;
                ?>
            @endforeach

            {{Form::hidden('redirect', "ferramenta/associate/modal/")}}

            {{Form::select('disciplina', $dis, null, ['class' => 'custom-select mb-3', 'placeholder' => 'Disciplina'])}} <br>
            {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
            
        </div>
    {!! Form::close() !!}

@endsection
@enddesktop
