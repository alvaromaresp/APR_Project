@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/responsavel"> Cadastro de Responsável</a><br>
    > <a href="/sesmt"> SESMT </a><br>
    > Editar SESMT: {{$sesmt->nome}}</b>
@endsection

@desktop
@section('content')

    {!! Form::open(['action' => ['SesmtController@update', $sesmt->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('nome', 'Editar SESMT')}} </h2>	
            {{Form::text('nome', $sesmt->nome, ['class' => 'mt-2 form-control', 'placeholder' => 'Nome'])}}
            {{Form::text('telefone', $sesmt->telefone, ['class' => 'form-control mt-3', 'placeholder' => 'Telefone - (XX) XXXX-XXXX'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		    <div class="float-left">
	            <a href="/sesmt" class="btn mt-3 btn-secondary">Voltar</a>
	        </div>
		</div>
    {!! Form::close() !!}

@endsection
@elsedesktop
@section('content')

    {!! Form::open(['action' => ['SesmtController@update', $sesmt->id ], 'method' => 'post']) !!}
            
        <div class="form-group ml-5 mr-3 mb-5">
            <h2> {{Form::label('nome', 'Editar SESMT')}} </h2>  
            {{Form::text('nome', $sesmt->nome, ['class' => 'mt-2 form-control', 'placeholder' => 'Nome'])}}
            {{Form::text('telefone', $sesmt->telefone, ['class' => 'form-control mt-3', 'placeholder' => 'Telefone - (XX) XXXX-XXXX'])}}

                {{Form::hidden('_method', 'PUT')}}

            {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <div class="float-left">
                <a href="/sesmt" class="btn mt-3 mb-5 btn-secondary">Voltar</a>
            </div>
        </div>
    {!! Form::close() !!}

@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para editar a informação, a fim de deixa-la mais precisa, para que ela seja selecionada futuramente na montagem da APR.
@endsection