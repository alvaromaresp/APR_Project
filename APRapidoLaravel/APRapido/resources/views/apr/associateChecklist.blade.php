@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/apr"> Cadastrar APR </a><br>
    > Criar nova APR: Check List</b>
@endsection

@section('content')

    <div class="mt-5 ml-5 mr-5 mb-5">

        <h2> {{Form::label('checklist', 'Checklist')}} </h2>

        @foreach($data['checklist'] as $cl)
            <div class="form-group">
                @if($data['apr']->checklists->find($cl)->pivot->checado == 0)
                    {!! Form::open(['action' => ['AprController@associateChecklist', $data['apr']->id], 'method'=>'post']) !!}
                        <p class="float-left">{{$cl->item}}</p>
                        {!! Form::hidden('checklist', $cl->id) !!}
                        {!! Form::submit('check', ['class' => 'btn btn-success mt-3 float-right']) !!}
                    {!! Form::close() !!}
                @else
                    {!! Form::open(['action' => ['AprController@desassociateChecklist', $data['apr']->id], 'method'=>'post']) !!}
                        <p class="float-left">{{$cl->item}}</p>
                        {!! Form::hidden('checklist', $cl->id) !!}
                        {!! Form::submit('unchek', ['class' => 'btn btn-danger mt-3 float-right']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
            <br>
        @endforeach
        <br>
        <a href="/apr/">Finalizar</a>
   	</div>

@endsection