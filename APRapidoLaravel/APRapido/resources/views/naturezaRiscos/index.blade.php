@extends('layout.app')

@section('content')
    
    @include('inc.messages')


    @if(count($nr) > 0)

        @foreach($nr as $n)

            <a href="/naturezaRiscos/{{$n->id}}"> {{$n->natureza_risco}} </a> <br>

        @endforeach

    @endif

@endsection