@extends('layout.app')

@section('content')
    
    @include('inc.messages')


    @if(count($nr) > 0)

        @foreach($nr as $n)

            {{$n->natureza_risco}} <br>

        @endforeach

    @endif

@endsection