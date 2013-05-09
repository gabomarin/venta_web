<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>TD-informatica</title>
    <meta name="description" content="Artículo en GenbetaDev sobre Bootstrap 2.0">
    <meta name="author" content="Alejandro">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
		span{color:#8B8B8B;}

    </style>

  </head>
  <body>

			<h1>
				Perfil de Usuario
			</h1>
			<hr>
			<div class="row-fluid">
				<div class="span4">
					<img src="https://s3.amazonaws.com/jetstrap-site/images/what_icon.png">
				</div>
				<div class="span6">
					<h3>
						Aqui va nombre de usuario!
					</h3>
					<p><span>Correo:</span> ----</p>
					<p><span>Direccion:</span> ----</p>
					<p><span>RFC:</span> ----</p>
					<p><span>Telefono:</span> ----</p>
					<a href="modificar_usuario.html">
						<button type="button" class="btn btn-info btn-large" id="modificar" name="modificar">
							Modificar 
						</button>
					</a>
					<a href="consulta_compra.html">
						<button type="button" class="btn btn-info btn-large" id="compra" name="compra">
							Ver Compras 
						</button>
					</a>
	
				</div>
			</div>
			<hr>


<!--/.fluid-container-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
