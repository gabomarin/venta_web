<?php /* Smarty version Smarty-3.1.13, created on 2013-05-20 22:21:05
         compiled from "templates\base_principal2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243675188f4338d70a8-71701891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3374c31aff7d86f8a25db464d812a1c92f46118' => 
    array (
      0 => 'templates\\base_principal2.tpl',
      1 => 1369065686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243675188f4338d70a8-71701891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5188f433dda761_24144605',
  'variables' => 
  array (
    'user' => 0,
    'categorias' => 0,
    'categoria' => 0,
    'titulocontenido' => 0,
    'contenido' => 0,
    'numero' => 0,
    'ultimos' => 0,
    'ultimo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5188f433dda761_24144605')) {function content_5188f433dda761_24144605($_smarty_tpl) {?><!DOCTYPE html>
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
	}
    </style>
	
	
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  </head>
  <body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="span1">
				<img src="images/logo.jpg" width=100px height=100px>
			</div>
		<div class="container-fluid span7">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<div class="nav-collapse collapse">

					
				<ul class="nav">
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

<div class="container-fluid">
	<div class="row-fluid">
		<!--/span-->
		<div class="span2">
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
			</div>
			<!--/.well -->
		</div>
		<div class="span7">
			<h3><?php echo $_smarty_tpl->tpl_vars['titulocontenido']->value;?>
</h3>
			  <div class="well container span12">
				<?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>


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
					<strong><?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
</strong><span> articulos</span>
				</p>
			</div>
						
					</div>
					
					<div class="well sidebar-nav">
						
						
							<h5>Ultimos Productos</h5>
							
							<p>
							  
								<?php  $_smarty_tpl->tpl_vars['ultimo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ultimo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ultimos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ultimo']->key => $_smarty_tpl->tpl_vars['ultimo']->value){
$_smarty_tpl->tpl_vars['ultimo']->_loop = true;
?>
								<a href="index.php?modulo=producto&action=consultarDato&dato=<?php echo $_smarty_tpl->tpl_vars['ultimo']->value['id'];?>
&atributo=id"><?php echo $_smarty_tpl->tpl_vars['ultimo']->value['nombre'];?>
</a>
								<img src= "<?php echo $_smarty_tpl->tpl_vars['ultimo']->value['imagen'];?>
" height=64 width=64/>
								Precio: $<?php echo $_smarty_tpl->tpl_vars['ultimo']->value['precio'];?>

								</br>
								<?php } ?>
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