@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/medidaPreventiva"> Cadastrar Medidas Preventivas </a><br>
    > Editar Medida Preventiva: {{$medidasPreventivas->medidapreventiva}} </b>
@endsection

@desktop
@section('content')

    {!! Form::open(['action' => ['MedidaPreventivaController@update', $medidasPreventivas->id ], 'method' => 'post']) !!}
            
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('medidapreventiva', 'Editar Medida Preventiva')}} </h2>	
            {{Form::text('medidapreventiva', $medidasPreventivas->medidapreventiva, ['class' => 'form-control', 'placeholder' => 'Medida Preventiva'])}}

		        {{Form::hidden('_method', 'PUT')}}

		    {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
		    <div class="float-left">
	            <a href="/medidaPreventiva" class="btn mt-3 btn-secondary">Voltar</a>
	        </div>
		</div>
    {!! Form::close() !!}

@endsection
@elsedesktop
@section('content')

    {!! Form::open(['action' => ['MedidaPreventivaController@update', $medidasPreventivas->id ], 'method' => 'post']) !!}
            
        <div class="form-group ml-5 mr-3 mb-5">
            <h2> {{Form::label('medidapreventiva', 'Editar Medida Preventiva')}} </h2>  
            {{Form::text('medidapreventiva', $medidasPreventivas->medidapreventiva, ['class' => 'form-control', 'placeholder' => 'Medida Preventiva'])}}

                {{Form::hidden('_method', 'PUT')}}

            {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <div class="float-left">
                <a href="/medidaPreventiva" class="btn mt-3 mb-5 btn-secondary">Voltar</a>
            </div>
        </div>
    {!! Form::close() !!}

@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    A função ao lado serve para editar a informação, a fim de deixa-la mais precisa, para que ela seja selecionada futuramente na montagem da APR.
@endsection