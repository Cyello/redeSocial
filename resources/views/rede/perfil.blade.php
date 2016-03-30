@extends('layout.principal')

@section('conteudo')

		  <div class="row"><br>
		    <div class="col-sm-2" ><h4>Sua Festa</h4></div>
		    <div class="col-sm-8" >
		    	<div class="col-xs-4">
				    <input type="text" class="form-control" placeholder="searsh"><br>
				 </div>
		    </div>
		    <div class="col-sm-2"></div>
		  </div>



		<table class="table table-striped" >
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
					<th>Idade</th>
					<th>Cidade</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($pessoas as $p)
				<tr>
					<td>{{$p->nome}}</td>
					<td>{{$p->idade}}</td>
					<td>{{$p->email}}</td>
					<td>{{$p->cidade}}</td>
					<td>
						<button type="button" class="btn btn-success">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>

				</tr>

				@endforeach
			</tbody>
		</table>
	



	
		
		
		
		
	

@stop