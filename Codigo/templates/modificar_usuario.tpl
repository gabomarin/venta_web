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
			<div class="texto">{$usuario}</div>
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label etiqueta">E-mail</label>
		  <div class="span4" id="contenedorMail">
		   <div class="texto">{$correo}</div>
		  </div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label">Direccion</label>
		  <div class="span4" id="contenedorDireccion">
		    <input id="direccion" class="input-xmedium" name="direccion" type="text" value="{$direccion}" placeholder="Ejemplo: Calle #0" class="input-xlarge"  maxlength="25" required="required" autocomplete="on">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label etiqueta">RFC</label>
		  <div class="span4" id="contenedorRfc">
		    <div class="texto">{$rfc}</div>
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Telefono</label>
		  <div class="span4" id="contenedorTelefono">
		    <input id="telefono" class="input-medium" name="telefono" type="tel" value="{$telefono}" class="input-xlarge" pattern="^(\d){10}$" maxlength="10" required="required" autocomplete="on">
		    
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
