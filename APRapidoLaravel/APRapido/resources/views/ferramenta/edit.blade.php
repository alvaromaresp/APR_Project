@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['FerramentaController@update', $data['ferramenta']->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('ferramenta', 'Editar Ferramenta')}} </h2>	
            {{Form::text('ferramenta', $data['ferramenta']->ferramenta, ['class' => 'form-control', 'placeholder' => 'Ferramenta'])}}

            
            <?php
                $dis = array();
            ?>

            @foreach($data['disciplina'] as $d)
                <?php
                    array_push($dis, [$d->id => $d->disciplina])
                ?>
            @endforeach

            {{Form::select('disciplina', $dis)}}
            {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection