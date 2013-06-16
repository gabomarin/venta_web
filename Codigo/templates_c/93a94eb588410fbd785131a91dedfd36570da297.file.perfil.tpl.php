<?php /* Smarty version Smarty-3.1.13, created on 2013-06-13 23:37:53
         compiled from "templates/perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137330437551a1326b13af00-77075500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93a94eb588410fbd785131a91dedfd36570da297' => 
    array (
      0 => 'templates/perfil.tpl',
      1 => 1371184468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137330437551a1326b13af00-77075500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a1326b18e2b9_97139692',
  'variables' => 
  array (
    'usuario' => 0,
    'correo' => 0,
    'direccion' => 0,
    'rfc' => 0,
    'telefono' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1326b18e2b9_97139692')) {function content_51a1326b18e2b9_97139692($_smarty_tpl) {?><style>
	  span{
			color:#8B8B8B;
  	  }
</style>
  <body>
		<div class="well span7">
			<h1>
				Perfil de Usuario
			</h1>
			<div class="row-fluid">
				<div class="span4">
					<img src="https://s3.amazonaws.com/jetstrap-site/images/what_icon.png">
				</div>
				<div class="span8">
					<h3>
						<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>

					</h3>
					<p><span>Correo:</span><?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
</p>
					<p><span>Direccion:</span><?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>
</p>
					<p><span>RFC:</span><?php echo $_smarty_tpl->tpl_vars['rfc']->value;?>
</p>
					<p><span>Telefono:</span><?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
</p>
					<a href="index.php?modulo=usuario&action=modificar">
						<button type="button" class="btn btn-info btn-large" id="modificar" name="modificar">
							Modificar
						</button>
					</a>
					<a href="index.php?modulo=usuario&action=modificarPass">
						  <button type="button" class="btn btn-info btn-large" id="pass" name="pass">
								  Cambiar Contrase&ntilde;a
						  </button>
					</a>
					<a href="index.php?modulo=venta&action=consultaCompra">
						<button type="button" class="btn btn-info btn-large" id="compra" name="compra">
							Ver Compras 
						</button>
					</a>
	
				</div>
			</div>
		</div>
			
</body>
<?php }} ?>