<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consulta Usuario</title>
    <meta name="description" content="">
    <meta name="author" content="Alejandro">

    <!-- Le styles -->
    <!-- Bootstrap -->
    <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<style type="text/css">
		.titulo{
			text-align:center;
		}
		.intermedio{
			font-size: 250%;
			margin:20%;
			text-align:center;
		}
		.contenedor{
			margin-top:8em;
		}
		button{
			margin-left:40%;
		}
		.tabla{
			margin-left: 50%;
			margin-top: 1em;
		}
		
	</style>
	
</head>
<body>
  <form class="form-search">
  	<div class="row-fluid">
  <div class="span12">
    <h1 class="titulo">Consulta de Usuario</h1>
    <div class="row-fluid contenedor">
      <div class="span4 hero-unit">
      		<!-- Search input-->
		<div class="row pagination-centered">
			<div class="control-group">
				<h2 class=>Listar por Nombre</h2>
				<div class="controls input-append">
				    <input id="searchinput" name="searchinput" type="text" class="input-medium search-query">
				    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Buscar</button>
			  	</div>
			</div>
		</div>
      </div>
      <div class="span4">
      	<p class="lead intermedio">OR</p>
      </div>
      <div class="span4 hero-unit">
	      <!-- Button -->
		<div class="control-group">
		  <h2 class="titulo">Listar todos</h2>
		  <div class="controls">
		    <button id="boton2" name="boton2" class="btn btn-success">Buscar</button>
		  </div>
		</div>
      </div>
    </div>
  </div>
  <!-- Tabla de Busqueda -->
  <div class="span6">
  	<table class="table table-hover table-bordered tabla">
  		<thead>
  			<tr>
  				<th>#</th>
  				<th>Nombre</th>
  				<th>E-mail</th>
  				<th>Direccion</th>
  				<th>RFC</th>
  				<th>Telefono</th>
  				<th>Estatus</th>
  				<th>Tipo</th>
  			</tr>
  		</thead>
  		<tbody>
  			<!-- Crear el Script para la consulta SQL -->
  			<tr>
  				<td>1</td>
  				<td>Pancho</td>
  				<td>pancho@gmail.com</td>
  				<td>avenida X</td>
  				<td>ldklsñ54</td>
  				<td>323232324</td>
  				<td>Disponible</td>
  				<td>Cliente</td>
  			</tr>
  		</tbody>
  	</table>
  </div>
</div>
	</form>
</html>