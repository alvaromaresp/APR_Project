@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/apr"> Cadastrar APR </a><br>
    > Criar nova APR: Check List</b>
@endsection

@desktop
@section('content')

    <div class="mt-5 ml-5 mr-5 mb-5">

        <h2> {{Form::label('checklist', 'Checklist')}} </h2>

        @foreach($data['checklist'] as $cl)
            <div class="table">
                @if(is_null($data['apr']->checklists->find($cl)))
                    {!! Form::open(['action' => ['AprController@associateChecklist', $data['apr']->id], 'method'=>'post']) !!}
                        <div class="row">
                            <div class="col-5"><p class="float-left mt-4">{{$cl->item}}</p></div>
                            <div class="col">
                                {!! Form::hidden('checklist', $cl->id) !!}
                                {!! Form::submit('check', ['class' => 'btn btn-success mt-2 float-right']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                @else
                    {!! Form::open(['action' => ['AprController@desassociateChecklist', $data['apr']->id], 'method'=>'post']) !!}
                        <div class="row">
                            <div class="col-5"><p class="float-left mt-4">{{$cl->item}}</p></div>
                            <div class="col">
                                {!! Form::hidden('checklist', $cl->id) !!}
                                {!! Form::submit('unchek', ['class' => 'btn btn-danger mt-2 float-right']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                @endif
            </div>
            <br>
        @endforeach
        <br>
        <a href="/apr/" class="btn btn-secondary mt-3 float-right">Finalizar</a>
   	</div>

@endsection
@elsedesktop
@section('content')

    <div class="ml-5 mr-5 mb-4">

        <h2> {{Form::label('checklist', 'Checklist')}} </h2>

        @foreach($data['checklist'] as $cl)
            <div class="table">
                @if(is_null($data['apr']->checklists->find($cl)))
                    {!! Form::open(['action' => ['AprController@associateChecklist', $data['apr']->id], 'method'=>'post']) !!}
                        <div class="row">
                            <div class="col-5"><p class="float-left mt-4">{{$cl->item}}</p></div>
                            <div class="col">
                                {!! Form::hidden('checklist', $cl->id) !!}
                                {!! Form::submit('check', ['class' => 'btn btn-success mt-3 float-right']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                @else
                    {!! Form::open(['action' => ['AprController@desassociateChecklist', $data['apr']->id], 'method'=>'post']) !!}
                        <div class="row">
                            <div class="col-5"><p class="float-left mt-4">{{$cl->item}}</p></div>
                            <div class="col">
                                {!! Form::hidden('checklist', $cl->id) !!}
                                {!! Form::submit('unchek', ['class' => 'btn btn-danger mt-3 float-right']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                @endif
            </div>
            <br>
        @endforeach
        <br>
        <a href="/apr/" class="btn btn-secondary mt-3 float-right">Finalizar</a>
    </div>

@endsection
@enddesktop

@extends('layout.flutuante')
@section('conteudo')
    O documento APR possui um Check List. Se o Item é verificado na tarefa em questão, basta checar o botão na frente.  Quando terminar de selecionar todas as naturezas de risco, basta clicar em "Ir para Checklist".
@endsection