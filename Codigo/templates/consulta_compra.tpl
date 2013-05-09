<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consulta Compras</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <!-- Bootstrap -->
    <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">

</head>
<body>
  <div class="container">
	<div class="container">
		<div class="hero-unit">
			<h1>
				Consulta de Compras
			</h1>
			<hr>
			<div class="row-fluid">
				<div class="span">
					<table class="table table-hover table-bordered tabla">
						<thead>
							<tr>
								<th>
									Folio
								</th>
								<th>
									Fecha
								</th>
								<th>
									Cantidad
								</th>
								<th>
									Precio
								</th>
								<th>
									Estatus
								</th>
								<th>
									Factura
								</th>
							</tr>
						</thead>
						<tbody>
							<!-- Crear el Script para la consulta SQL -->
							<tr>
								<td>
									1
								</td>
								<td>
									2012-04-11
								</td>
								<td>
									15
								</td>
								<td>
									150
								</td>
								<td>
									Valida
								</td>
								<td>
									<a class="btn btn-primary btn-large" id="factura">PDF</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row-fluid">
			</div>
			<hr>
		</div>
	</div>
</div>
</html>