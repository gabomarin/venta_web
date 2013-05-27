<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>TD-informatica | {$titulo}</title>
    <meta name="description" content="Artículo en GenbetaDev sobre Bootstrap 2.0">
    <meta name="author" content="Lex" >
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

      

          .login-form {
                margin-left: 65px;
          }
        
          legend {
                margin-right: -50px;
                font-weight: bold;
                color: #404040;
          }
	.superior{
			font-size:140%;
			margin-top: 15px;
	}
	.barra{
	margin-top: 2em;
	}

    </style>
	
	
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  </head>
  <body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div>
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<div class="nav-collapse collapse">

					
				<ul class="nav">
					<li>
						<img src="images/logo.jpg" width=80% height=80%>
					</li>
				
					<li class="active">
						<a class="superior" href="index.php">Home</a>
					</li>
					
					<li>
						<a class="superior" href="index.php?modulo=estandar&action=contacto">Contacto</a>
					</li>
					{$user}
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>

<div class="container-fluid barra">
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
						<a href="index.php?modulo=categoria&action=consulta&id={$categoria.id}">{$categoria.nombre}</a>
					</li>
					{/foreach}
					
				</ul>
			</div>
			<!--/.well -->
		</div>
				{$contenido}

		<!--/span-->
		<div class="row-fluid span3">
		      <div class="well sidebar-nav span8">
		      <img src="images/shopping.gif" alt="" width="24" height="24" class="shopping" />
		      <p>
			      Carro de compra
		      </p>
		      <p>
			      <strong>{$numero}</strong><span> articulos</span>
		      </p>
		      </div>
		      
		      <div class="well sidebar-nav span8">
			  <h4>Ultimos Productos</h4>
			  <hr>
			  
			  <div class="row-fluid">
			    
				  {foreach item=ultimo from=$ultimos}
				  <div class="container span7">
				    <a href="index.php?modulo=producto&action=consultarDato&dato={$ultimo.id}&atributo=id">{$ultimo.nombre}</a>
				    <img src= "{$ultimo.imagen}" height=120 width=120/>
				    <p>Precio: ${$ultimo.precio}</p>  
				  </div>
				  {/foreach}
			  </div>
	
		      </div>
		
		</div>
			</div>
		</div>
		</div>
	</div>
	<!--/row-->
	<hr>
	<footer>
		<div class="container span6 offset4">
		  <a href="index.php">Inicio</a> | <a href="">FAQ</a> | <a href="">Contactanos</a> | <a href="" >Politicas de Privacidad</a> |
	     	<a href="" >Terminos del servicio</a>
		</div>
	  
	</footer>
</div>
<!--/.fluid-container-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
