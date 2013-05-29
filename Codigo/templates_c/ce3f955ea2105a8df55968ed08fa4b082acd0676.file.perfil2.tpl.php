<?php /* Smarty version Smarty-3.1.13, created on 2013-05-25 17:41:05
         compiled from "templates\perfil2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2074451a12ff167abc0-32524028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce3f955ea2105a8df55968ed08fa4b082acd0676' => 
    array (
      0 => 'templates\\perfil2.tpl',
      1 => 1369518063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2074451a12ff167abc0-32524028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuario' => 0,
    'correo' => 0,
    'direccion' => 0,
    'rfc' => 0,
    'telefono' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a12ff16e2fe6_80060140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a12ff16e2fe6_80060140')) {function content_51a12ff16e2fe6_80060140($_smarty_tpl) {?>
  <body>
		<div class="well span7">
			<h1>
				Perfil de Usuario
			</h1>
			<div class="row-fluid">
				<div class="span4">
					<img src="https://s3.amazonaws.com/jetstrap-site/images/what_icon.png">
				</div>
				<div class="span6">
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