<?php /* Smarty version Smarty-3.1.13, created on 2013-05-25 21:19:16
         compiled from "templates\modificar_usuario.html" */ ?>
<?php /*%%SmartyHeaderCode:1880651a15c08784b50-31376876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e1db1a289c2cc1e1a8f8bd9c00e13afe7e5566e' => 
    array (
      0 => 'templates\\modificar_usuario.html',
      1 => 1369531154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1880651a15c08784b50-31376876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a15c087cac01_53765348',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a15c087cac01_53765348')) {function content_51a15c087cac01_53765348($_smarty_tpl) {?><!--<style>
	  .mensaje{
	    height: 15px;
	  }
	  .contenedorAlto{
	    height: 48px;
	  }
</style>-->
	<script type="text/javascript" src="bootstrap/js/validaciones.js"></script>
    <form class="well form-horizontal well span7" method="post" enctype="multipart/form-data" action="index.php?modulo=usuario&action=insertar" id="registrar"  name="registrar">
		<fieldset>
		
		<!-- Form Name -->
		<legend><h1>Modificar Usuario</h1></legend>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Nombre</label>
		  <div class="span4" id="contenedorNombre">
		    <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>

		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label">E-mail</label>
		  <div class="span4" id="contenedorMail">
		    <input id="mail" class="input-xmedium" name="mail" type="email" placeholder="ejemplo@dominio.com" class="input-xlarge" maxlength="25" required="required" autocomplete="off" readonly>
		    
		  </div>
		</div>
		
		<!-- Password input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Contraseña</label>
		  <div class="span4" id="contenedorPass">
		    <input id="pass" class="input-medium" name="pass" type="password" class="input-xlarge" pattern="^([a-zA-Z]|\d)<?php echo 6;?>
$"  maxlength="25" required="required">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label">Direccion</label>
		  <div class="span4" id="contenedorDireccion">
		    <input id="direccion" class="input-xmedium" name="direccion" type="text" placeholder="Ejemplo: Calle #0" class="input-xlarge" pattern="^([a-zA-Z]<?php echo 2;?>
)+( <?php echo 1;?>
([a-zA-Z]|\d)+)* #\d+(-(\d|[a-zA-Z])<?php echo 12;?>
)?$" maxlength="25" required="required" autocomplete="on">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">RFC</label>
		  <div class="span4" id="contenedorRfc">
		    <input id="rfc" class="input-medium" name="rfc" type="text" class="input-xlarge" pattern="^([a-zA-Z]|\d)<?php echo 13;?>
$"maxlength="13" required="required" autocomplete="off" readonly>
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Telefono</label>
		  <div class="span4" id="contenedorTelefono">
		    <input id="telefono" class="input-medium" name="telefono" type="tel" class="input-xlarge" pattern="^(\d)<?php echo 10;?>
$" maxlength="10" required="required" autocomplete="on">
		    
		  </div>
		</div>
		<input type="hidden" id="tipo" name="tipo" value="1"/>
		<input type="hidden" id="estatus" name="estatus" value="0"/>
		  <div class="controls">
		    <button type="button" id="cancelar" name="cancelar" class="btn btn-danger">cancelar</button>
		    <button type="button" id="enviar" name="enviar" class="btn btn-success" onclick="envia()">Modificar</button>
		  </div>
		</fieldset>
</form>
<?php }} ?>