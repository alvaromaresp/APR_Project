@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'checkListController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('idchecklist', 'Novo idchecklist Check List')}} </h2>
            {{Form::text('idchecklist', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Check List'])}}
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   		</div>
    {!! Form::close() !!}

@endsection