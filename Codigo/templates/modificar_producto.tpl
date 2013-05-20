<!DOCTYPE html>
<html>
  <head>
    <title>Modificar Producto</title>
    <meta name="author" content="Lex" />
	<meta charset="UTF-8"/>
	<meta name="keywords" content="Modificar Producto"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <form class="form-horizontal span6" method="post" action="index.php/?modulo=usuario&action=insertar">
		<fieldset>
		
		<!-- Form Name -->
		<legend>Modificar Producto</legend>
		
		<!-- Text input-->
		<div class="control-group">
		  <label class="control-label">Nombre</label>
		  <div class="controls">
		    <input id="nombre" name="nombre" type="text" class="input-xlarge" value="nada aun" readonly >
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="control-group input-prepend input-append">
		  <label class="control-label">Precio</label>
		  <div class="controls">
		  	<span class="add-on">$</span>
		    <input id="precio" name="precio" type="text" class="input-small" pattern="^(\d)+(\.(\d){2})?$" maxlength="10" required="required" autocomplete="off" value="nada aun">
		  </div>
		</div>
		
		<div class="control-group input-prepend input-append">
			<label class="control-label">Descripcion</label>
			<div class="controls">
				<textarea id="descripcion" name="precio" rows="8" cols="80" >
					
				</textarea>
			</div>
		</div>
		
		
		<!-- Text input-->
		<div class="control-group">
		  <label class="control-label">Existencia</label>
		  <div class="controls">
		    <input id="existencia" name="existencia" type="number" class="input-small" pattern="^(\d)+$" min="0"  required="required" value"1">
		    
		  </div>
		</div>
		<!-- File Button --> 
		<div class="control-group">
		  <label class="control-label">Imagen</label>
		  <div class="controls">
		    <input id="imagen" name="imagen" class="input-file" type="file" accept="image/png,image/jpeg">
		  </div>
		</div>
		<input type="hidden" id="estatus" name="estatus" value="1"/>
		  <div class="controls">
		    <button type="button" id="limpiar" name="limpiar" class="btn btn-danger">Cancelar</button>
		    <button type="submit" id="enviar" name="enviar" class="btn btn-success">Crear Producto</button>
		  </div>
		</fieldset>
	</form>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>