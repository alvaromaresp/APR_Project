@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/apr"> Cadastrar APR </a><br>
    > APR: {{$data['apr']->nome}} </b>
@endsection

@desktop
@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h3><p class="font-weight-bold">
		ITEM: {{$data['apr']->nome}} <br><br>
		NATUREZA RISCOS:</p>
		@foreach($data['naturezariscos'] as $nr)
			<li>{{$nr->natureza_risco}}</li>
		@endforeach
		<br>
		<p class="font-weight-bold"> CHECKLIST: </p>
		@foreach($data['checklistall'] as $cl)
			<?php
				$find = false;
			?>
			@foreach($data['checklist'] as $clas)
				@if($cl->id == $clas->id)
					<?php
						$find = true;
					?>
				@endif
			@endforeach

			@if($find)
				<li>{{$cl->item}}: sim</li>
			@else
				<li>{{$cl->item}}: nao</li>
			@endif
		@endforeach
		<br>
		<p class="font-weight-bold"> ATIVIDADES:</p>

		<br>
		<table class="table">
			<thead>
				<tr>
					<th> </th>
					<th>Ferramenta</th>
					<th>Riscos</th>
					<th>Medidas Preventivas</th>
				</tr>
			</thead>
			@foreach($data['atividade'] as $atv)
				<tr>
					<td>{{$atv->atividade}}</td>

					<?php
						$bf = true;
					?>

					@foreach($atv->Ferramentas as $fer)
						@if(!$bf)
							<td></td>
						@endif

						<td>{{$fer->ferramenta}}</td>

						<?php
							$br = true;
						?>

						@foreach($fer->Riscos as $ris)
							@if(!$br)
								<td></td>
								<td></td>
							@endif
							<td>{{$ris->risco}}</td>
								
							<?php
								$bmp = true;
							?>
							@foreach($ris->medidaspreventivas as $mp)
								@if(!$bmp)
									<td></td>
									<td></td>
									<td></td>
								@endif
								<td>{{$mp->medidapreventiva}}</td>

								</tr>
								<?php
									$bmp = false;
								?>
							@endforeach
							@if($bmp)
								</tr>
							@endif
							<?php
								$br = false;
							?>
						@endforeach
						@if($br)
							</tr>
						@endif
						<?php
							$bf = false;
						?>
					@endforeach
					@if($bf)
						</tr>
					@endif
			@endforeach
		</table>


		</p></h2><br>
	    <div class="float-right">
			<a href="/apr/{{$data['apr']->id}}/edit" class="btn btn-success mt-2">Editar</a>
			<a href="/impressao/{{$data['apr']->id}}" class="btn btn-info mt-2">Imprimir</a>
		    {!!Form::open(['action' => ['AprController@destroy', $data['apr']->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
			<a href="/apr" class="btn btn-secondary">Voltar</a>
		</div>
    </div>
@endsection
@elsedesktop
@section('content')
	<div class="ml-5 mr-3 mb-5">
	    <h3><p class="font-weight-bold">
		ITEM: {{$data['apr']->nome}} <br><br>
		NATUREZA RISCOS:</p>
		@foreach($data['naturezariscos'] as $nr)
			<li>{{$nr->natureza_risco}}</li>
		@endforeach
		<br>
		<p class="font-weight-bold"> CHECKLIST: </p>
		@foreach($data['checklistall'] as $cl)
			<?php
				$find = false;
			?>
			@foreach($data['checklist'] as $clas)
				@if($cl->id == $clas->id)
					<?php
						$find = true;
					?>
				@endif
			@endforeach

			@if($find)
				<li>{{$cl->item}}: sim</li>
			@else
				<li>{{$cl->item}}: nao</li>
			@endif
		@endforeach

		<br>
		<p class="font-weight-bold"> ATIVIDADES:</p>

		<br>
		<div class="table-responsive-sm">
		<table class="table">
			@foreach($data['atividade'] as $atv)
				<tr>
					<td>{{$atv->atividade}}</td>

					<?php
						$bf = true;
					?>

					@foreach($atv->Ferramentas as $fer)
						@if(!$bf)
							<td></td>
						@endif

						<td>{{$fer->ferramenta}}</td>

						<?php
							$br = true;
						?>

						@foreach($fer->Riscos as $ris)
							@if(!$br)
								<td></td>
								<td></td>
							@endif
							<td>{{$ris->risco}}</td>

							<?php
								$bmp = true;
							?>
							@foreach($ris->medidaspreventivas as $mp)
								@if(!$bmp)
									<td></td>
									<td></td>
									<td></td>
								@endif
								<td>{{$mp->medidapreventiva}}</td>

								</tr>
								<?php
									$bmp = false;
								?>
							@endforeach

							<?php
								$br = false;
							?>
						@endforeach

						<?php
							$bf = false;
						?>
					@endforeach

			@endforeach
		</table>
	</div>

		</p></h2><br>
	    <div class="float-right">
			<a href="/apr/{{$data['apr']->id}}/edit" class="btn btn-success mt-2">Editar</a>
			<a href="/impressao/{{$data['apr']->id}}" class="btn btn-info mt-2">Imprimir</a>
		    {!!Form::open(['action' => ['AprController@destroy', $data['apr']->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
		<div class="float-left">
			<a href="/apr" class="btn btn-secondary mt-2">Voltar</a>
		</div>
    </div>
@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    As informações da APR específica podem ser observadas ao lado. É possível editá-la e deletá-la.
@endsection
