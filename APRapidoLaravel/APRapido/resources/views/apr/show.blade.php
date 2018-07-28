@extends('layout.app')


@section('content')
	<div class="mt-5 ml-5 mr-5 mb-5">
	    <h1><p class="font-weight-bold">ID: {{$data['apr']->id}} <br>
		ITEM: {{$data['apr']->nome}} <br>
		NATUREZA RISCOS:
		@foreach($data['naturezariscos'] as $nr)
			<li>{{$nr->natureza_risco}}</li>
		@endforeach
		CHECKLIST:
		@foreach($data['checklist'] as $cl)
			@if($cl->pivot->checado == 1)
				<?php
					$checado = 'sim';
				?>
			@else
				<?php
					$checado = 'não';
				?>
			@endif
			<li>{{$cl->item}}:{{$checado}}</li>
		@endforeach

		ATIVIDADES:
	
		
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


		</p></h1><br>
	    <div class="float-right">
			<a href="/apr/{{$data['apr']->id}}/edit" class="btn btn-success mt-2">Editar</a>
		    {!!Form::open(['action' => ['AprController@destroy', $data['apr']->id], 'method', 'post', 'class' => 'mt-2'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
		</div>
    </div>
@endsection