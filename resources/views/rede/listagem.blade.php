@extends('layout.principal')

@section('conteudo')

	<h1>Pessoas cadastradas</h1>

	<table class="table table-striped table-bordered" >
		<thead>
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th>Idade</th>
				<th>Cidade</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($pessoas as $p)
			<tr>
				<td>{{$p->nome}}</td>
				<td>{{$p->idade}}</td>
				<td>{{$p->email}}</td>
				<td>{{$p->cidade}}</td>
			</tr>

			@endforeach
		</tbody>
	</table>

	
		
		
		
		
	

@stop