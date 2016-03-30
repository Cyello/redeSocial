<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pessoas cadastradas</title>
	<link rel="stylesheet" href="">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	 integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>


	<div class="container-fluid">
		<div class="row"><br>
		    <div class="col-sm-3" >
		    	<h4>Sua Festa</h4>
		    </div>
		    <div class="col-sm-6" >
		    	@yield('busca')
		    </div>
		    <div class="col-sm-3">
		    	<ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="#">Home</a></li>
				  <li role="presentation"><a href="#">Perfil</a></li>
				  <li role="presentation"><a href="#">Sair</a></li>
				</ul>
			
		    </div>
		</div>
	   <header class="row">
	   		<h1>Evenntos</h1>

	     
	   </header>
	   <div class="row">
	       <div role="main">
	           @yield('conteudo')
	       </div>
	   </div>
	   <footer class="row">
	       
	   </footer>
	</div>	
</body>
</html>