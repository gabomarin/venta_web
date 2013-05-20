<?php /* Smarty version Smarty-3.1.13, created on 2013-05-14 07:12:10
         compiled from "templates/base_principal2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1805972346518896f62e8ab7-38896015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cf56932cade6cd523a96b666a0cb2112e38fcbb' => 
    array (
      0 => 'templates/base_principal2.tpl',
      1 => 1368507251,
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
<?php if ($_valid && !is_callable('content_518896f637c1d4_56467935')) {function content_518896f637c1d4_56467935($_smarty_tpl) {?><!DOCTYPE html>
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
    </style>
	
	
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
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
						<a href="index.php?modulo=estandar&action=contacto">Contacto</a>
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
		<div class="container span6 offset6">
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