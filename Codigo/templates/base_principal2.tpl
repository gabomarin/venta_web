<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>TD-informatica</title>
    <meta name="description" content="Artículo en GenbetaDev sobre Bootstrap 2.0">
    <meta name="author" content="Alejandro">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <style>
      body { padding-top: 60px; }
		.arriba{
			margin-top:0;
		}
		
		 /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; 
      }
      .container {
        width: 300px;
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; 
        -webkit-border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

          .login-form {
                margin-left: 65px;
          }
        
          legend {
                margin-right: -50px;
                font-weight: bold;
                color: #404040;
          }
    </style>
	
	
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  </head>
  <body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<a class="brand" href="index.php">TD-Informatica</a>
			<div class="nav-collapse collapse">

					
				<ul class="nav">
					<li class="active">
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="index.php?modulo=about">About</a>
					</li>
					<li>
						<a href="index.php?modulo=contact">Contact</a>
					</li>
					{$user}
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row-fluid">
		<!--/span-->
		<div class="span2">
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
					<li class="nav-header">
						Categorias
					</li>
					{foreach item=categoria from=$categorias}
					<li>
						<a href="index.php?modulo=categoria&action=listar&id={$categoria.id}">{$categoria.nombre}</a>
					</li>
					{/foreach}
					
				</ul>
			</div>
			<!--/.well -->
		</div>
		<div class="span7">
			<h1>{$titulocontenido}</h1>
			  <div class="well container span12">
				{$contenido}

			</div>
			
			
		</div>
		<!--/span-->
		<div class="span3">
			<div id="right">
				<br />
				<div class="well sidebar-nav">
				<img src="images/shopping.gif" alt="" width="24" height="24" class="shopping" />
				<p>
					Carro de compra
				</p>
				<p>
					<strong>{$numero}</strong><span> articulos</span>
				</p>
			</div>
						
					</div>
					
					<div class="well sidebar-nav">
						
						
							<h5>Ultimos Productos</h5>
							
							<p>
								{foreach item=ultimo from=$ultimos}
								<a href="index.php?modulo=producto&action=listar&id{$ultimo.id}">{$ultimo.nombre}</a>
								<img src= "{$ultimo.imagen}" height=64 width=64/>
								Precio: ${$ultimo.precio}
								</br>
								{/foreach}
							</p>

					</div>
					

					
				</div>
			</div>
		</div>
		</div>
	</div>
	<!--/row-->
	<hr>
	<footer>
		<a href="">Inicio</a> | <a href="">Nuevos Productos</a> | <a href="">Promociones</a> |
		<a href="">FAQ</a> | <a href="">Contactanos</a> | <a href="" >Politicas de Privacidad</a> |
		<a href="" >Terminos del servicio</a>
	</footer>
</div>
<!--/.fluid-container-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
