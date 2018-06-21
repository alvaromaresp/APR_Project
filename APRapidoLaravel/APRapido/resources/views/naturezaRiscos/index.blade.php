@extends('layout.app')

@section('content')

    @if(count($nr) > 0)

        @foreach($nr as $n)

            {{$n->natureza_risco}} <br>

        @endforeach

    @endif

@endsection