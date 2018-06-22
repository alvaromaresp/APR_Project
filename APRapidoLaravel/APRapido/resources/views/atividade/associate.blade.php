@extends('layout.app')

@section('content')

{!! Form::open(['action' => 'riscosController@associate', 'method' => 'post']) !!}
        <div class="form-group mt-5 ml-5 mr-5 mb-5">
            <h2> {{Form::label('medidaPreventiva', 'Associar Medida Preventiva')}} </h2>
            {{Form::select('medidaPreventiva', ['l'->'large'], ['class' => 'form-control mt-3 mb-3', 'placeholder' => 'Medida Preventiva'])}}
            
            @foreach($riscos->riscos_medidaspreventivas as $mp)
                
                {!!Form::open(['action' => ['riscosController@desassociate', $mp->id], 'method', 'post', 'class' => 'mt-2'])!!}
                    <p>{{$mp->medidapreventiva}}</p>
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

            @endforeach

            {{Form::submit('Enviar', ['class' => 'btn btn-success mt-3 float-right'])}}
            <a href="/riscos">FINALIZAR</a>
   		</div>
    {!! Form::close() !!}

@endsection