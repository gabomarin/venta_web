<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consulta Venta</title>
    <meta name="description" content="">
    <meta name="author" content="">

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
    <h1 class="titulo">Consulta de Venta</h1>
    <div class="row-fluid contenedor">
      <div class="span4 hero-unit">
      		<!-- Search input-->
		<div class="row pagination-centered">
			<div class="control-group">
				<h2 class=>Listar por Fecha</h2>
				<div class="controls input-append">
				    <input id="fecha" name="fecha" type="date" required="required">
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
  				<th>Fecha</th>
  				<th>Cantidad Producto</th>
  			</tr>
  		</thead>
  		<tbody>
  			<!-- Crear el Script para la consulta SQL -->
  			<tr>
  				<td>1</td>
  				<td>2012-04-11</td>
  				<td>15</td>
  			</tr>
  		</tbody>
  	</table>
  </div>
</div>
	</form>
</html>