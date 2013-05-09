<?php /* Smarty version Smarty-3.1.13, created on 2013-05-06 12:02:48
         compiled from "C:\xampp\htdocs\smarty\templates\base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101985186a6d82eb886-18474199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7058c5934bd314a7121b4fd18ec520e5a941e5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\base.tpl',
      1 => 1367855964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101985186a6d82eb886-18474199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5186a6d84c5080_65819243',
  'variables' => 
  array (
    'title' => 0,
    'numero' => 0,
    'categorias' => 0,
    'categoria' => 0,
    'user' => 0,
    'contenido' => 0,
    'panelContent' => 0,
    'ultimos' => 0,
    'ultimo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5186a6d84c5080_65819243')) {function content_5186a6d84c5080_65819243($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>TD_INFORMATICA | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
		<!--<link rel="stylesheet" type="text/css" href="templates/style.css" />-->
		<!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	</head>

	<body>
		<div id="header">
			<a href="index.html" class="float"><img src="images/logo.jpg" alt="" width="281" height="73" /></a>
			
			<div class="topblock2">
				<img src="images/shopping.gif" alt="" width="24" height="24" class="shopping" />
				<p>
					Carro de compra
				</p>
				<p>
					<strong><?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
</strong><span> articulos</span>
				</p>
			</div>
			<ul id="menu-bar">
				<li class="active">
					<a href="index.php">Inicio</a>
				</li>
				<li>
					<a href="#">Productos</a>
					<ul>
						<?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
						<li class="color">
							<a href="index.php?modulo=categoria&action=listar&id=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</a>
						</li>
						<?php } ?>
						
					</ul>
				</li>
				
				<li>
					<a href="#">Acerca de</a>
				</li>
				<li>
					<a href="#">Contactanos</a>
				</li>
				<?php echo $_smarty_tpl->tpl_vars['user']->value;?>

			</ul>

		</div>

		<div id="container">
			<div id="center" class="column">
				<br />
				<div id="content">
					<?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>

					
				</div>
			</div>
			<div id="left" class="column">
				<div class="block">
					<h1> Categorias</h1>
					<br />
					<ul id="navigation">
						<?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
						<li class="color">
							<a href="index.php?modulo=categoria&action=listar&id=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</a>
						</li>
						<?php } ?>
						

					</ul>
				</div>
				
			</div>
			<div id="right" class="column">
				<br />
				<div class="rightblock">
					
					<div class="blocks">
						<!--<img src="images/top_bg.gif" alt="" width="218" height="12" />
						<form action="index.php?modulo=estandar&action=login" method="post">
							<p class="line">
								<span>Email:</span>
								<input type="text" id="mail" name="mail" required/>
							</p>
							<p class="line">
								<span>Password:</span>
								<input type="password" id="pass" name="pass" required/>
							</p>
							<p class="line center">
								<a href="registro.html" class="reg">Registrate</a> | <a href="#" class="reg">Olvidaste password?</a>
							</p>
							<p class="line center pad20">
								<button type="submit" />
								Acceder</button>
							</p>
						</form>
						<img src="images/bot_bg.gif" alt="" width="218" height="10" />
						<br />-->
						<?php echo $_smarty_tpl->tpl_vars['panelContent']->value;?>

					</div>
					
					
					<div class="blocks">
						</br>
						<div id="news">
							
							<h2>Ultimos Productos</h2>
							<br>
							
							<p>
								<?php  $_smarty_tpl->tpl_vars['ultimo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ultimo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ultimos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ultimo']->key => $_smarty_tpl->tpl_vars['ultimo']->value){
$_smarty_tpl->tpl_vars['ultimo']->_loop = true;
?>
								<a href="index.php?modulo=producto&action=listar&id<?php echo $_smarty_tpl->tpl_vars['ultimo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ultimo']->value['nombre'];?>
</a>
								<img src= "<?php echo $_smarty_tpl->tpl_vars['ultimo']->value['imagen'];?>
" height=64 width=64/>
								Precio: $<?php echo $_smarty_tpl->tpl_vars['ultimo']->value['precio'];?>

								
								</br>
								<?php } ?>
							</p>

						</div>
						<br />
					</div>

					
				</div>
			</div>
		</div>

		<div id="footer">
			<a href="">Inicio</a> | <a href="">Nuevos Productos</a> | <a href="">Promociones</a> |
			   <a href="">FAQ</a> | <a href="">Contactanos</a> | <a href="" >Politicas de Privacidad</a> |
			    <a href="" >Terminos del servicio</a>
		</div>
	</body>
</html>
<?php }} ?>