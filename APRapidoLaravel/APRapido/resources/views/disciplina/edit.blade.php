@extends('layout.app')

@section('content')

    {!! Form::open(['action' => ['DisciplinaController@update', $disciplina->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('disciplina', 'Editar Disciplina')}} </h2>	
            {{Form::text('disciplina', $disciplina->disciplina, ['class' => 'form-control', 'placeholder' => 'Disciplina'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		    <div class="float-left">
				<a href="/disciplina" class="btn mt-3 btn-secondary">Voltar</a>
			</div>
		</div>
    {!! Form::close() !!}

@endsection 

@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para editar a informação, a fim de deixa-la mais precisa, para que ela seja selecionada futuramente na montagem da APR.
@endsection