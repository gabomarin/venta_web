<?php /* Smarty version Smarty-3.1.13, created on 2013-06-08 20:08:02
         compiled from "templates\modificar_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:506851a159690a16f1-72698870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8d1bdcb2edb716b9ca2279d0803e0ee2ea760ef' => 
    array (
      0 => 'templates\\modificar_usuario.tpl',
      1 => 1370653406,
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
    'usuario' => 0,
    'correo' => 0,
    'direccion' => 0,
    'rfc' => 0,
    'telefono' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a15969139535_18128856')) {function content_51a15969139535_18128856($_smarty_tpl) {?><style>
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
	  
	  .etiqueta
	  {
		color: rgba(1,1,1,.5);
	  }
</style>

	<script type="text/javascript" src="bootstrap/js/validaUsuario.js"></script>
    <form class="well form-horizontal well span7" method="post" enctype="multipart/form-data" action="index.php?modulo=usuario&action=insertar" id="registrar"  name="registrar">
		<fieldset>
		
		<!-- Form Name -->
		<legend><h1>Modificar Usuario</h1></legend>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label etiqueta">Nombre</label>
		  <div class="span4" id="contenedorNombre">
			<div class="texto"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</div>
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label etiqueta">E-mail</label>
		  <div class="span4" id="contenedorMail">
		   <div class="texto"><?php echo $_smarty_tpl->tpl_vars['correo']->value;?>
</div>
		  </div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label">Direccion</label>
		  <div class="span4" id="contenedorDireccion">
		    <input id="direccion" class="input-xmedium" name="direccion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>
" placeholder="Ejemplo: Calle #0" class="input-xlarge"  maxlength="25" required="required" autocomplete="on">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label etiqueta">RFC</label>
		  <div class="span4" id="contenedorRfc">
		    <div class="texto"><?php echo $_smarty_tpl->tpl_vars['rfc']->value;?>
</div>
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Telefono</label>
		  <div class="span4" id="contenedorTelefono">
		    <input id="telefono" class="input-medium" name="telefono" type="tel" value="<?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
" class="input-xlarge" pattern="^(\d)<?php echo 10;?>
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