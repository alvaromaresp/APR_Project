@extends('layout.app')
 
@section('content')

    {!! Form::open(['action' => ['checkListController@update', $idchecklist->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('idchecklist', 'Editar Check List')}} </h2>	
            {{Form::text('idchecklist', $idchecklist->idchecklist, ['class' => 'form-control', 'placeholder' => 'Check List'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		</div>
    {!! Form::close() !!}

@endsection