@extends('layout.app')

@section('content')

    {!! Form::open(['action' => 'AprController@store', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('nome', 'Nova APR')}} </h2>
            {{Form::text('nome', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Nome'])}}
            {{Form::text('telr', '', ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Telr'])}}

        
   			{{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
   		</div>
    {!! Form::close() !!}

@endsection

<!-- old code



-->