<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 03:23:09
         compiled from "templates\modificar_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:506851a159690a16f1-72698870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8d1bdcb2edb716b9ca2279d0803e0ee2ea760ef' => 
    array (
      0 => 'templates\\modificar_usuario.tpl',
      1 => 1371193076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '506851a159690a16f1-72698870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a15969139535_18128856',
  'variables' => 
  array (
    'id' => 0,
    'usuario' => 0,
    'correo' => 0,
    'rfc' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a15969139535_18128856')) {function content_51a15969139535_18128856($_smarty_tpl) {?><head>
  <style>
	  .mensaje{
	    height: 15px;
	  }
	  .contenedorAlto{
	    height: 48px;
	  }
	  .texto{
		background-color: rgba(180, 180, 180, 0.2);
		color: rgba(1,1,1,.5);
		margin-top: .2em;
		display: inline-block;
		padding-left: 1.5em;
		padding-right: 1.5em;
		padding-top: .1em;
		padding-bottom: .1em;
		border-radius: 2px;
		cursor: not-allowed;
		border: 1px solid rgba(4, 4, 3,.2);
		min-width: 1em;
		min-height:1.5em; 
		
		
	  }
	</style>
	<script type="text/javascript" src="bootstrap/js/validaModificaUsuario.js"></script>
  </head>
  
  
  <body>
    <form class="well form-horizontal well span7" method="post" enctype="multipart/form-data" action="index.php?modulo=usuario&action=modificaUsuario" id="registrar"  name="registrar">
		<fieldset>
		
		<!-- Form Name -->
		<legend><h1>Modificar Usuario</h1></legend>
		<!-- Text input-->
		<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" >
		<div class="contenedorAlto control-group">
		  <label class="control-label">Nombre</label>
		  <div class="span4" >
		    <div class="texto" ><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</div>
		    <input type="hidden" id="usuario" name="usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
" >
		  </div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label">E-mail</label>
		  <div class="span4" >
		    <div class="texto" ><?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
</div>
		    <input type="hidden" id="correo" name="correo" value="<?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
" >
		  </div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label">Direccion</label>
		  <div class="span4" >
		    <input id="direccion" class="input-xmedium" name="direccion" type="text" placeholder="Ejemplo: Calle #0" class="input-xlarge" maxlength="25" required="required" autocomplete="on">
		    
		  </div>
		</div>
		<div class="contenedorAlto control-group" style="display: none" id="errorDireccion" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px" >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" style="display: none" id="errorDireccion2" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span3" style="width: 300px" >Ejemplo: Calle #0</div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">RFC</label>
		  <div class="span4" >
		    <div class="texto" ><?php echo $_smarty_tpl->tpl_vars['rfc']->value;?>
</div>
		    <input type="hidden" id="rfc" name="rfc" value="<?php echo $_smarty_tpl->tpl_vars['rfc']->value;?>
" >
		  </div>
		</div>

		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Telefono</label>
		  <div class="span4" >
		    <input id="telefono" class="input-medium" name="telefono" type="tel" class="input-xlarge" maxlength="10" required="required" autocomplete="on">
		    
		  </div>
		</div>
		<div class="contenedorAlto control-group" style="display: none" id="errorTelefono" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px" >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" style="display: none" id="errorTelefono2" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span4" style="width: 305px" >Solo se permite numeros(deben ser 10)</div>
		</div>
		<input type="hidden" id="tipo" name="tipo" value="1"/>
		<input type="hidden" id="estatus" name="estatus" value="1"/>
		  <div class="controls">
		    <button type="reset" id="limpiar" name="limpiar" class="btn btn-danger">Limpiar</button>
		    <button type="button" id="enviar" name="enviar" class="btn btn-success" onclick="envia()">Crear mi Cuenta</button>
		  </div>
		</fieldset>
		<?php if ($_smarty_tpl->tpl_vars['error']->value!=''){?>
			<div class="tam" style="margin-top: 10%;">
			<div class="prueba alert alert-success">
			
			  <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

			  </div>
			</div>
		<?php }?>
	</form>

  </body>
<?php }} ?>