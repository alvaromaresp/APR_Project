@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['atividadeController@update', $riscos->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('atividade', 'Editar Atividade')}} </h2>	
            {{Form::text('atividade', $atividade->atividade, ['class' => 'form-control', 'placeholder' => 'Atividade'])}}
            {{Form::select('atividade', ['l'=>'large'])}}
		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection