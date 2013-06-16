<head>
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
		<input type="hidden" id="id" name="id" value="{$id}" >
		<div class="contenedorAlto control-group">
		  <label class="control-label">Nombre</label>
		  <div class="span4" >
		    <div class="texto" >{$usuario}</div>
		    <input type="hidden" id="usuario" name="usuario" value="{$usuario}" >
		  </div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label">E-mail</label>
		  <div class="span4" >
		    <div class="texto" >{$correo}</div>
		    <input type="hidden" id="correo" name="correo" value="{$correo}" >
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
		    <div class="texto" >{$rfc}</div>
		    <input type="hidden" id="rfc" name="rfc" value="{$rfc}" >
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
		{if $error != ""}
			<div class="tam" style="margin-top: 10%;">
			<div class="prueba alert alert-success">
			
			  {$error}
			  </div>
			</div>
		{/if}
	</form>

  </body>
