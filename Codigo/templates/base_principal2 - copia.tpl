<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>TD-informatica | {$titulo}</title>
    <meta name="description" content="Artículo en GenbetaDev sobre Bootstrap 2.0">
    <meta name="author" content="Lex" >
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	  
	  
	  	<link rel="stylesheet" href="simplecart/example.css" type="text/css" media="screen" charset="utf-8" />
	<!--[if lte IE 6]><link rel="stylesheet" href="ie6.css" type="text/css" media="screen" charset="utf-8" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" href="ie7.css" type="text/css" media="screen" charset="utf-8" /><![endif]-->
	<!--Include the SimpleCart(js) script-->
	<!--<script src="simplecart/javascripts/simpleCart.js" type="text/javascript" charset="utf-8"></script>!.-->
	
	<script src="simplecart/simpleCart.js" type="text/javascript" charset="utf-8"></script>

	
<script>
  simpleCart({
	
    checkout: {
      type: "SendForm" , 
        url: "http://localhost/index.php",
		method: "GET" 
    }
	
	
  });
  
  
  
  simpleCart({
    cartColumns: [
        { attr: "name" , label: "Name" } ,
        { attr: "price" , label: "Price", view: 'currency' } ,
        
        { attr: "quantity" , label: "Qty" } ,
		
        { attr: "total" , label: "SubTotal", view: 'currency' } ,
		{ view: "decrement" , label: false , text: "<span class=icon-minus> </span>" } ,
        { view: "increment" , label: false , text: "<span class=icon-plus> </span>" } ,
        { view: "remove" , text: "<span class=icon-remove> </span>" , label: false },
		//{ view: "image", attr: "thumb" , label: false}
    ]
});
</script>
  <!--<script type="text/javascript">
	  
	  simpleCart = new cart("gabrielortiz');
	  simpleCart.checkoutTo="Email";




		//simpleCart.checkout.SendForm('url=http://example.com/your/custom/checkout/url');
		//simpleCart('type=SendForm','url=http://example.com/your/custom/checkout/url');
	</script>
-->
	

    <style>
      body { padding-top: 60px; }
		.arriba{
			margin-top:0;
		}
		
		 /* Override some defaults */
      html, body {
        background-color: #b9b9b9;
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
			font-size:130%;
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
		<div class="row-fluid span3 lateral">
		      <div class="well sidebar-nav span8 sidebar">
		      <!--<img src="images/shopping.gif" alt="" width="24" height="24" class="shopping" />
		      <p>
			      Carro de compra
		      </p>
		      <p>
				
				<span class="simpleCart_quantity"></span> articulos - <span class="simpleCart_total"></span>
				</br>
			  <a class="btn btn-inverse" href="javascript:;" class="simpleCart_checkout">Comprar</a>
			     
		      </p>-->

				<h4>Mi carro</h4>
				<hr>
				
				
				<!--Add a Div with the class "simpleCart_items" to show your shopping cart area.-->
				<div class="simpleCart_items" >
				</div>
				
				Total: <span class="simpleCart_total"></span>
				<!--Here's the Links to Checkout and Empty Cart-->
				<hr>
				<a href="#" class="simpleCart_empty"><button class="btn btn-danger pull-left">Vaciar carro</button></a>
				<a href="javascript:;" class="simpleCart_checkout"><button class="btn btn-info pull-right">Comprar</button></a>
				<!--<a href="#" class="simpleCart_checkout"><button class="btn btn-info pull-right">Comprar</button></a>-->
				

				
				

		      </div>
		      
		      <div class="well sidebar-nav span8" style="margin-left: 0px">
			  <h4>Ultimos Productos</h4>	  
			  <div class="row-fluid offset2">
				
				
			    
				  {foreach item=ultimo from=$ultimos}
				  
				  <div class="container span7">
				    <hr>
				    <a href="index.php?modulo=producto&action=consultarDato&dato={$ultimo.id}&atributo=id">{$ultimo.nombre}</a>
				    <br />
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
