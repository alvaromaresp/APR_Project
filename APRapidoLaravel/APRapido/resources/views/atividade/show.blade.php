@extends('layout.app')

@section('caminho')
    <b> > <a href="\"> Menu </a><br>
    > <a href="/atividades"> Cadastrar Atividades </a><br>
    > Atividade: {{$data['atividade']->atividade}} </b>
@endsection
 
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
			<table class="table">
				
				<tr>
					<td>{{$fer->ferramenta}}</td>
					@foreach($fer->Riscos as $ris)
						<td>
							Risco: {{$ris->risco}}
						</td>
						@foreach($ris->medidaspreventivas as $mp)
							<?php
								$cmp--;
							?>
							<td>
								MP: {{$mp->medidapreventiva}}
							</td>
							</tr>
							@if($cmp == 0)
								<td></td>
								<td></td>
							@endif
						@endforeach

						@if($cr != 0)
							<td></td>
						@endif
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

@extends('layout.flutuante')
@section('conteudo')
    As informações da atividade específica podem ser observadas ao lado. É possível editá-la e deletá-la.
@endsection