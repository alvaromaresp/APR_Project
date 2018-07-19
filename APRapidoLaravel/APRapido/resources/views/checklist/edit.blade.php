@extends('layout.app')
 
@section('content')

    {!! Form::open(['action' => ['CheckListController@update', $checklist->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('item', 'Editar Item do Check List')}} </h2>	
            {{Form::text('item', $checklist->item, ['class' => 'form-control', 'placeholder' => 'Item'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		    <div class="float-left">
				<a href="/checklist" class="btn mt-3 btn-secondary">Voltar</a>
			</div>
		</div>
    {!! Form::close() !!}

@endsection 