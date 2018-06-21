@extends('layout.app')


@section('content')

    {{$nr->id}}  <br>
    {{$nr->natureza_risco}} <br>

    <a href="/naturezaRiscos/{{$nr->id}}/edit" class="btn btn-primary">Edit</a>

    {!!Form::open(['action' => ['naturezaRiscosController@destroy', $nr->id], 'method', 'post', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection