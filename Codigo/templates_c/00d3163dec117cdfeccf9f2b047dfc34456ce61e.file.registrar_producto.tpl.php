<?php /* Smarty version Smarty-3.1.13, created on 2013-06-13 22:02:34
         compiled from "templates\registrar_producto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129451ba79ba4d1718-47546997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00d3163dec117cdfeccf9f2b047dfc34456ce61e' => 
    array (
      0 => 'templates\\registrar_producto.tpl',
      1 => 1371175351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129451ba79ba4d1718-47546997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ba79ba56d2a9_90394850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ba79ba56d2a9_90394850')) {function content_51ba79ba56d2a9_90394850($_smarty_tpl) {?><head>
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
	</style>
	<script type="text/javascript" src="bootstrap/js/validaProducto.js"></script>
  </head>
	
	<form class="form-horizontal well span7" method="post" enctype="multipart/form-data" action="index.php?modulo=producto&action=insertar" id="registrar"  name="registrar">
		<fieldset>
		
		<!-- Form Name -->
		<legend><h1>Registrar Producto</h1></legend>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Nombre</label>
		  <div class="span4">
		    <input id="nombre" name="nombre" type="text" class="input-large" maxlength="25" autocomplete="on">
		    
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
		    <input id="precio" name="precio" type="text" class="input-small"  maxlength="10" required="required" autocomplete="off">
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
		  <label class="control-label">Existencia</label>
		  <div class="span4">
		    <input id="existencia" class="input-mini" name="existencia" type="text" class="input-small" min="0"  required="required">
		    
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
		<!-- File Button --> 
		<div class="contenedorAlto control-group">
		  <label class="control-label">Imagen</label>
		  <div class="span4">
		    <input id="imagen" name="imagen" class="input-file" type="file" accept="image/png,image/jpeg" style="width: 140px">
		  </div>
		</div>
		<div class="contenedorAlto control-group" id="errorImagen" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		
		<div class="contenedorAlto control-group" style="height: 170px">
			<label class="control-label">Descripcion</label>
			<div class="span4" style="margin-left: 10px;width: 140px; resize: none">
				<textarea id="descripcion" name="descripcion" rows="8" cols="8" ></textarea>
			</div>
		</div>
		<div class="contenedorAlto control-group" id="errorDescripcion" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		
		<input type="hidden" id="estatus" name="estatus" value="1"/>
		  <div class="controls">
		    <button type="reset" id="limpiar" name="limpiar" class="btn btn-danger">Limpiar</button>
		   <button type="button" id="enviar" name="enviar" class="btn btn-success" onclick="envia()">Crear Producto</button>
		</fieldset>
		<?php if ($_smarty_tpl->tpl_vars['error']->value!=''){?>
			<div class="tam" style="margin-top: 10%;">
			<div class="prueba alert alert-success">
			
			  <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

			  </div>
			</div>
		<?php }?>
	</form><?php }} ?>