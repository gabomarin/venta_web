<head>
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
		  <div class="span4" id="contenedorNombre">
		    <input id="nombre" name="nombre" type="text" class="input-large" maxlength="25" pattern="^([a-zA-Z]{2,} ?)*[a-zA-Z]{2,}$" autocomplete="on">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Precio</label>
		  <div class="span4" id="contenedorPrecio">
		  	<span class="add-on">$</span>
		    <input id="precio" name="precio" type="text" class="input-small" pattern="^(\d)+(\.(\d){2})?$" maxlength="10" required="required" autocomplete="off">
		  </div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Existencia</label>
		  <div class="span4" id="contenedorExistencia">
		    <input id="existencia" class="input-mini" name="existencia" type="text" class="input-small" pattern="^(\d)+$" min="0"  required="required">
		    
		  </div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Categoria</label>
		  <div class="span4" id="contenedorCategoria">
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
		  <div class="span4" id="contenedorImagen">
		    <input id="imagen" name="imagen" class="input-file" type="file" accept="image/png,image/jpeg">
		  </div>
		</div>
		<div class="contenedorAlto control-group">
			<label class="control-label">Descripcion</label>
			<div class="span4" style="margin-left: 20px; resize: none" id="contenedorDescripcion">
				<textarea id="descripcion" name="descripcion" rows="8" cols="8" ></textarea>
			</div>
		</div>
		<input type="hidden" id="estatus" name="estatus" value="1"/>
		  <div class="bajar controls">
		    <button type="reset" id="limpiar" name="limpiar" class="btn btn-danger">Limpiar</button>
		   <button type="button" id="enviar" name="enviar" class="btn btn-success" onclick="envia()">Crear Producto</button>
		</fieldset>
	</form>