@extends('layout.principal')

@section('busca')
	<div class="col-xs-8">
	   <input type="text" class="form-control" placeholder="searsh"><br>
	 </div>
@stop

@section('conteudo')

		<table class="table table-striped" >
			<thead>
			
			</thead>
			<tbody>
				@foreach ($eventos as $e)
				<tr>
					<td>{{$e->nome}}</td>
					<td>{{$e->Descricao}}</td>
				</tr>

				@endforeach
			</tbody>
		</table>


		<button type="button" class="btn">Postar novo evento</button>
	



	
		
		
		
		
	

@stop