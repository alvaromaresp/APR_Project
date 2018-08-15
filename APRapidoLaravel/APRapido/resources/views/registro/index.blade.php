@extends('layout.app')

@section('caminho')
    <b>> <a href="/"> Menu</a><br>
    > Registro de Impressão
    </b>
@endsection

@desktop
@section('content')

	<div class="mt-5 ml-5 mr-5 mb-5">
		<h2> Registro de Impressão</h2>

		{!! Form::open(['action' => 'RegistrosController@search', 'method' => 'post']) !!}
		<div class="input-group mb-4 mt-4">
		  <input type="date" class="form-control" name="search" id="search" placeholder="Data Procurada"/>
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="submit">Buscar</button>
		  </div>
		</div>	
		{!! Form::close() !!}

		
			@if(count($registros) > 0)
			<table class="table-hover">
			<thead>
				<tr>
					<th>
						Nome da APR
					</th>
					<th>
						Número do Documento
					</th>
					<th>
						Data de Impressão
					</th>
					<th>
						Usuário
					</th>
				</tr>
			</thead>
				@foreach($registros as $registro)
					<tr>
						<td>
							{{$registro-> aprs-> nome}} 
						</td>
						<td>
							{{sprintf('%04d', $registro-> id)}}
						</td>
						<td>
							{{date_format($registro-> created_at, 'd/m/Y')}}
						</td>
						<td>
							{{$registro-> users-> nome}}
						</td>
					</tr>

				@endforeach
			@else
				<p> Nenhuma APR encontrada. </p>
			@endif
		</table>
		</div>
	</div>
@endsection
@elsedesktop
@section('content')

	<div class="ml-5 mr-3 mb-5">
		<h2> Registro de Impressão</h2>

		{!! Form::open(['action' => 'RegistrosController@search', 'method' => 'post']) !!}
		<div class="input-group mb-4 mt-4">
		  <input type="date" class="form-control" name="search" id="search" placeholder="Data Procurada"/>
		  <div class="input-group-append">
		    <button class="btn btn-secondary" type="submit">Buscar</button>
		  </div>
		</div>	
		{!! Form::close() !!}

		
			@if(count($registros) > 0)
			<div class="table-responsive-sm">
			<table class="table-hover">
			<thead>
				<tr>
					<th>
						Nome da APR
					</th>
					<th>
						Número do Documento
					</th>
					<th>
						Data de Impressão
					</th>
					<th>
						Hora de Impressão
					</th>
					<th>
						Usuário
					</th>
				</tr>
			</thead>
				@foreach($registros as $registro)
					<tr>
						<td>
							{{$registro-> aprs-> nome}} 
						</td>
						<td>
							{{sprintf('%04d', $registro-> id)}}
						</td>
						<td>
							{{date_format($registro-> created_at, 'd/m/Y')}}
						</td>
						<td>
							{{date_format($registro-> created_at, 'H:i:s')}}
						</td>
						<td>
							{{$registro-> users-> nome}}
						</td>
					</tr>

				@endforeach
			@else
				<p> Nenhuma APR encontrada. </p>
			@endif
		</table>
	</div>
		</div>
	</div>
@endsection
@enddesktop
@extends('layout.flutuante')
@section('conteudo')
    A página atual tem a função de mostrar o registro de todas as APRs impressas, qual foi ela, a data de impressão e quem a imprimiu. Além disso, o registro pode ser buscado pela data que foi emitido.
@endsection