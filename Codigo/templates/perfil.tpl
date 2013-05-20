
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
						{$usuario}
					</h3>
					<p><span>Correo:</span>{$correo}</p>
					<p><span>Direccion:</span>{$direccion}</p>
					<p><span>RFC:</span>{$rfc}</p>
					<p><span>Telefono:</span>{$telefono}</p>
					<a href="index.php?modulo=usuario&action=modificar">
						<button type="button" class="btn btn-info btn-large" id="modificar" name="modificar">
							Modificar 
						</button>
					</a>
					<a href="index.php?modulo=venta&action=consulta">
						<button type="button" class="btn btn-info btn-large" id="compra" name="compra">
							Ver Compras 
						</button>
					</a>
	
				</div>
			</div>
			<hr>


