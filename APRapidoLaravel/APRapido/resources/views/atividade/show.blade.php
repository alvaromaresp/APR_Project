@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/atividades"> Cadastrar Atividades </a><br>
    > Atividade: {{$data['atividade']->atividade}} </b>
@endsection
 
@desktop
@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h3><p class="font-weight-bold">
		ITEM: {{$data['atividade']->atividade}} <br><br>
		EMPRESA: {{$data['empresa']->empresa}} <br><br>
		DISCIPLINA: {{$data['disciplina']->disciplina}} <br><br>
		FERRAMENTAS: <br><br>
		<table class="table">
				<thead>
					<tr>
						<th> </th>
						<th>Risco </th>
						<th>Medida Preventiva </th>
					</tr>
				</thead>
		
				<tr>
					@foreach($data['ferramenta'] as $fer)
						<td>{{$fer->ferramenta}}</td>
							<?php
								$bf = true;
							?>
						@foreach($fer->Riscos as $ris)
								@if(!$bf)
									<td></td>
								@endif
								<td>{{$ris->risco}}</td>
							<?php
								$br = true;
							?>
							<?php
								$bf = false;
							?>
							@foreach($ris->medidaspreventivas as $mp)
								@if(!$br)
									<td></td>
									<td></td>
								@endif
								<td>{{$mp->medidapreventiva}}</td>

								</tr>
								<?php
									$br = false;
								?>
							@endforeach
						@endforeach
					@endforeach
			</table>
		</p></h3><br> 
	    <div class="float-right">
		    <a href="/atividades/{{$data['atividade']->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['AtividadeController@destroy', $data['atividade']->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
			<a href="/atividades" class="btn btn-secondary">Voltar</a>
		</div>
    </div>
@endsection
@elsedesktop
@section('content')
	<div class="ml-5 mr-3 mb-5">
	    <h3><p class="font-weight-bold">
		ITEM: {{$data['atividade']->atividade}} <br><br>
		EMPRESA: {{$data['empresa']->empresa}} <br><br>
		DISCIPLINA: {{$data['disciplina']->disciplina}} <br><br>
		FERRAMENTAS: <br><br>

			<div class="table-responsive-sm">
			<table class="table">
				<thead>
					<tr>
						<th> </th>
						<th>Risco </th>
						<th>Medida Preventiva </th>
					</tr>
				</thead>
		
				<tr>
					@foreach($data['ferramenta'] as $fer)
						<td>{{$fer->ferramenta}}</td>
							<?php
								$bf = true;
							?>
						@foreach($fer->Riscos as $ris)
								@if(!$bf)
									<td></td>
								@endif
								<td>{{$ris->risco}}</td>
							<?php
								$br = true;
							?>
							<?php
								$bf = false;
							?>
							@foreach($ris->medidaspreventivas as $mp)
								@if(!$br)
									<td></td>
									<td></td>
								@endif
								<td>{{$mp->medidapreventiva}}</td>

								</tr>
								<?php
									$br = false;
								?>
							@endforeach
						@endforeach
					@endforeach
			</table>
		</div>
		</p></h3><br> 
	    <div class="float-right">
		    <a href="/atividades/{{$data['atividade']->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['AtividadeController@destroy', $data['atividade']->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
			<a href="/atividades" class="btn mt-2 btn-secondary">Voltar</a>
		</div>
    </div>
@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    As informações da atividade específica podem ser observadas ao lado. É possível editá-la e deletá-la.
@endsection