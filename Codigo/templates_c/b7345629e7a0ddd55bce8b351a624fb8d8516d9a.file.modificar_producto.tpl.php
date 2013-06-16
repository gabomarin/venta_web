<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 02:33:07
         compiled from "templates/modificar_producto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109430638451bac7336e4b98-42056447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7345629e7a0ddd55bce8b351a624fb8d8516d9a' => 
    array (
      0 => 'templates/modificar_producto.tpl',
      1 => 1371194994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109430638451bac7336e4b98-42056447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nombre' => 0,
    'id' => 0,
    'precio' => 0,
    'existencia' => 0,
    'descripcion' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bac73375b209_54991286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bac73375b209_54991286')) {function content_51bac73375b209_54991286($_smarty_tpl) {?><head>
	<style>
		.error{
		color:red;
		}
		.mensaje{
		    height: 15px;
		  }
		  .contenedorAlto{
		    height: 48px;
		  }
		  .bajar{
			margin-top: 170px;
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
	</style>
	<script type="text/javascript" src="bootstrap/js/validaModificaProducto.js"></script>
  </head>
	
	<form class="form-horizontal well span7" method="post" enctype="multipart/form-data" action="index.php?modulo=producto&action=modificar" id="registrar"  name="registrar">
		<fieldset>
		
		<!-- Form Name -->
		<legend><h1>Modificar Producto</h1></legend>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Nombre</label>
		  <div class="span4">
		    <div class="texto" ><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</div>
			<input type="hidden" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" >
			  <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" >
		    
		  </div>
		</div>
		<div class="contenedorAlto control-group" id="errorNombre" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" id="errorNombre2" style="display: none" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span3" style="width: 300px" >Solo letras</div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Precio</label>
		  <div class="span4">
		  	<span class="add-on">$</span>
		    <input id="precio" name="precio" type="text" class="input-small"  maxlength="10" required="required" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
">
		  </div>
		</div>
		<div class="contenedorAlto control-group" id="errorPrecio" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" id="errorPrecio2" style="display: none" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span3" style="width: 300px" >formato: 15 , 15.00</div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Existencias</label>
		  <div class="span4">
		    <input id="existencia" class="input-mini" name="existencia" type="text" class="input-small" min="0"  required="required" value="<?php echo $_smarty_tpl->tpl_vars['existencia']->value;?>
">
		    
		  </div>
		</div>
		<div class="contenedorAlto control-group" id="errorExistencia" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" id="errorExistencia2" style="display: none" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span3" style="width: 300px" >Solo numeros</div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Categoria</label>
		  <div class="span4">
		    <select id="categoria" name="categoria">
			<option value="1">Procesadores</option>
			<option value="2">Gabinetes</option>
			<option value="3">Memorias Usb</option>
			<option value="4">Tarjetas de Video</option>
			<option value="5">Discos Duros</option>
			<option value="6">Mouses</option>
			<option value="7">Laptops</option>
			<option value="8">Tablets</option>
			<option value="9">Bocinas</option>
			<option value="10">Audifonos</option>
			<option value="11">Microfonos</option>
			<option value="12">PC de Escritorio</option>
			<option value="13">Monitor</option>
			<option value="14">Teclados</option>
		    </select>
		    
		  </div>
		</div>
		
		
		<div class="contenedorAlto control-group" style="height: 170px">
			<label class="control-label">Descripcion</label>
			<div class="span4" style="margin-left: 10px;width: 140px; resize: none">
				<textarea id="descripcion" name="descripcion" rows="8" cols="8" ><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</textarea>
			</div>
		</div>
		<div class="contenedorAlto control-group" id="errorDescripcion" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		
		<input type="hidden" id="estatus" name="estatus" value="1"/>
		  <div class="controls">
		    <button type="reset" id="limpiar" name="limpiar" class="btn btn-danger">Limpiar</button>
		   <button type="button" id="enviar" name="enviar" class="btn btn-success" onclick="envia()">Editar Producto</button>
		</fieldset>
		<?php if ($_smarty_tpl->tpl_vars['error']->value!=''){?>
			<div class="tam" style="margin-top: 10%;">
			<div class="prueba alert alert-success">
			
			  <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

			  </div>
			</div>
		<?php }?>
	</form>
<?php }} ?>