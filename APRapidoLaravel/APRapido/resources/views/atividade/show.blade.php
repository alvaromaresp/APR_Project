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
		<?php
			$cr = 0;
			$cmp = 0;
		?>


		@foreach($data['ferramenta'] as $fer)

			@foreach($fer->Riscos as $ris)
				<?php
					$cr++;
				?>
			@endforeach

			@foreach($ris->medidaspreventivas as $mp)
				<?php
					$cmp++;
				?>
			@endforeach
			<?php
				$comp=$cmp;
			?>
			<table class="table">
				<thead>
					<tr>
						<th> </th>
						<th>Risco </th>
						<th>Medida Preventiva </th>
					</tr>
				</thead>
				<tr>
					<td>{{$fer->ferramenta}}</td>
					@foreach($fer->Riscos as $ris)
						<td>
							{{$ris->risco}}
						</td>
						@foreach($ris->medidaspreventivas as $mp)
						@if($cmp == $comp)
							<td>
								{{$mp->medidapreventiva}}
							</td>
							<?php
								$cmp--;
							?>
						@else
							@if($cmp>0)
							<tr>
								<td> </td>
								<td> </td>
								<td>
									{{$mp->medidapreventiva}}
								</td>
							</tr>
							@endif
							<?php
								$cmp--;
							?>
						@endif
						@endforeach
					@endforeach
				</tr>
			</table>
		@endforeach
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
		<?php
			$cr = 0;
			$cmp = 0;
		?>


		@foreach($data['ferramenta'] as $fer)

			@foreach($fer->Riscos as $ris)
				<?php
					$cr++;
				?>
			@endforeach

			@foreach($ris->medidaspreventivas as $mp)
				<?php
					$cmp++;
				?>
			@endforeach
			<?php
				$comp=$cmp;
			?>
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
					<td>{{$fer->ferramenta}}</td>
					@foreach($fer->Riscos as $ris)
						<td>
							{{$ris->risco}}
						</td>
						@foreach($ris->medidaspreventivas as $mp)
						@if($cmp == $comp)
							<td>
								{{$mp->medidapreventiva}}
							</td>
							<?php
								$cmp--;
							?>
						@else
							@if($cmp>0)
							<tr>
								<td> </td>
								<td> </td>
								<td>
									{{$mp->medidapreventiva}}
								</td>
							</tr>
							@endif
							<?php
								$cmp--;
							?>
						@endif
						@endforeach
					@endforeach
				</tr>
			</table>
		</div>
		@endforeach
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