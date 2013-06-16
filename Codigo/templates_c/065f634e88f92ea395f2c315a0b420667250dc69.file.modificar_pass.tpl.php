<?php /* Smarty version Smarty-3.1.13, created on 2013-06-13 15:43:27
         compiled from "templates\modificar_pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1760051a6b142291450-01110007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '065f634e88f92ea395f2c315a0b420667250dc69' => 
    array (
      0 => 'templates\\modificar_pass.tpl',
      1 => 1371152596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1760051a6b142291450-01110007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a6b142323309_58967703',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a6b142323309_58967703')) {function content_51a6b142323309_58967703($_smarty_tpl) {?><style>
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

	<script type="text/javascript" src="bootstrap/js/validaPass.js"></script>
    <form class="well form-horizontal well span7" method="post" enctype="multipart/form-data" action="index.php?modulo=usuario&action=modificarPass" id="registrar"  name="registrar">
		<fieldset>
		
		<!-- Form Name -->
		<legend><h1>Cambiar Contraseña</h1></legend>
		
		<!-- Password input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Contraseña Anterior</label>
		  <div class="span4">
		    <input id="passAnterior" class="input-medium" name="passAnterior" type="password" class="input-xlarge" value="" maxlength="25" required="required">
		    
		  </div>
	        </div>
		
		<div class="contenedorAlto control-group" id="errorPassAnterior" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" id="errorPassAnterior2" style="display: none" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span4" style="width: 300px" >Solo letras y numeros(Minimo de 6)</div>
		</div>
		  <!-- Password input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Contraseña Nueva</label>
		  <div class="span4">
		    <input id="passNuevo" class="input-medium" name="passNuevo" type="password" class="input-xlarge" value="" maxlength="25" required="required">
		  </div>
		</div>
		
		<div class="contenedorAlto control-group" id="errorPassNuevo" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" id="errorPassNuevo2" style="display: none" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span4" style="width: 300px" >Solo letras y numeros(Minimo de 6)</div>
		</div>
		<div class="controls">
		    <button type="button" id="cancelar" name="cancelar" class="btn btn-danger" onclick="javascript:window.history.back();">cancelar</button>
		    <button type="button" id="enviar" name="enviar" class="btn btn-success" onclick="envia()">Cambiar</button>
	         </div>
		<?php if ($_smarty_tpl->tpl_vars['error']->value==1){?>
		    <div class="span4" style="margin-top: 10%;">
		    <div class="prueba alert alert-error">
		    
		      Las contraseñas no coinciden
		      </div>
		    </div>
	       <?php }elseif($_smarty_tpl->tpl_vars['error']->value==0){?>
		    <div class="span4" style="margin-top: 10%;">
		    <div class="prueba alert alert-success">
		    
		      Contraseña cambiada con exito
		      </div>
		    </div>
		 
		    
		    
	       <?php }?>
		</fieldset>
</form>
<?php }} ?>