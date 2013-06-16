<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 02:17:30
         compiled from "templates/base_principal2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1805972346518896f62e8ab7-38896015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cf56932cade6cd523a96b666a0cb2112e38fcbb' => 
    array (
      0 => 'templates/base_principal2.tpl',
      1 => 1371194052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1805972346518896f62e8ab7-38896015',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518896f637c1d4_56467935',
  'variables' => 
  array (
    'titulo' => 0,
    'compra' => 0,
    'user' => 0,
    'categorias' => 0,
    'categoria' => 0,
    'contenido' => 0,
    'ultimos' => 0,
    'ultimo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518896f637c1d4_56467935')) {function content_518896f637c1d4_56467935($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>TD-informatica | <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <meta name="description" content="Artículo en GenbetaDev sobre Bootstrap 2.0">
    <meta name="author" content="Lex" >
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<style>
	  .laterales{
		min-width:146px;
		max-width:240px;
	  }
	</style>  
	  
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
        url: "index.php?modulo=venta&action=generar",
		method: "POST" 
    },
	currency: "MXN",
	cartStyle: "table"
	
  });
  

  
  simpleCart({
    cartColumns: [

	  
	  
	  
		{ attr: "id_prod" , label: "ID" },
		{ view: "image", attr: "thumb" , label: false},
        { attr: "name" , label: "Nombre" } ,
        { attr: "price" , label: "Precio", view: 'currency' } ,
        { view: "decrement" , label: false , text: "<span class=icon-minus-sign> </span>" } ,
        { attr: "quantity" , label: "Cantidad" } ,
		{ view: "increment" , label: false , text: "<span class=icon-plus-sign> </span>" } ,
		
        { attr: "total" , label: "SubTotal", view: 'currency' } ,
		
        
        { view: "remove" , text: "<span class=icon-remove> </span>" , label: false },
		
	
		
		
		
		
		
    ]
});
  
  
  simpleCart.bind( 'beforeCheckout' , function( data ){
  data.total = simpleCart.grandTotal();
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
  
  
  <?php if ($_smarty_tpl->tpl_vars['compra']->value==0){?>
  <body>
	
  <?php }else{ ?>
  <body onload="simpleCart.empty()">
  <?php }?>
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
						<img src="images/logo.jpg" width=80%<?php ?>>
					</li>
				
					<li class="active">
						<a class="superior" href="index.php">Home</a>
					</li>
					
					<li>
						<a class="superior" href="index.php?modulo=estandar&action=contacto">Contacto</a>
					</li>
					<?php echo $_smarty_tpl->tpl_vars['user']->value;?>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>

<div class="container-fluid barra">
	<div class="row-fluid">
		<!--/span-->
		<div class="span3 laterales" >
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
					<li class="nav-header">
						Categorias
					</li>
					<?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
					<li>
						<a href="index.php?modulo=categoria&action=consulta&id=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</a>
					</li>
					<?php } ?>
					
				</ul>
				<hr>
				  <a href="index.php?modulo=producto&action=listar">Ver todo</a>
			</div>
			<!--/.well -->
		</div>
				<?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>


		<!--/span-->
		<div class="row-fluid span3 lateral laterales">
		      <div class="well sidebar-nav span12 sidebar" style="min-height: 260px;">
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
				<!--<div class="simpleCart_items"></div>-->
				<span class="simpleCart_quantity"></span> productos agregados </br> </br>
				Total: <span class="simpleCart_total"></span>
				<!--Here's the Links to Checkout and Empty Cart-->
				<hr>
				<a class="simpleCart_empty" href="javascript:;"><button class="btn btn-danger"><i class="icon-trash icon-white"></i> Vaciar Carro</button></a>
				<br>
				  <br>
				<!--<a class="btn btn-primary" href="index.php?modulo=venta&action=carro">Detalle</a>-->
				<a href="index.php?modulo=venta&action=carro" class="btn btn-primary"><i class="icon-list-alt icon-white"></i>Detalle</a>
				<!--<a href="javascript:;" class="simpleCart_checkout"><button class="btn btn-info pull-right">Comprar</button></a>
				<!--<a href="#" class="simpleCart_checkout"><button class="btn btn-info pull-right">Comprar</button></a>-->
				

				
				

		      </div>
		      
		      <div class="well sidebar-nav span12" style="margin-left: 0px;min-width:146px;max-width:240px;">
			  <h4>Ultimos Productos</h4>	  
			  <div class="row-fluid offset1">
				
				
			    
				  <?php  $_smarty_tpl->tpl_vars['ultimo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ultimo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ultimos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ultimo']->key => $_smarty_tpl->tpl_vars['ultimo']->value){
$_smarty_tpl->tpl_vars['ultimo']->_loop = true;
?>
				  
				  <div class="container span7" style="width:112px; height: 169px">
				    <hr>
				    <a href="index.php?modulo=producto&action=consultarDato&dato=<?php echo $_smarty_tpl->tpl_vars['ultimo']->value['id'];?>
&atributo=id"><?php echo $_smarty_tpl->tpl_vars['ultimo']->value['nombre'];?>
</a>
				    <br />
				    <img src= "<?php echo $_smarty_tpl->tpl_vars['ultimo']->value['imagen'];?>
" height="120px" width="120px"/>
				    <p>Precio: $<?php echo $_smarty_tpl->tpl_vars['ultimo']->value['precio'];?>
</p>  
				  </div>
				  <?php } ?>
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
<?php }} ?>