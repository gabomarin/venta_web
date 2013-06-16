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
		{if $error == 1}
		    <div class="span4" style="margin-top: 10%;">
		    <div class="prueba alert alert-error">
		    
		      Las contraseñas no coinciden
		      </div>
		    </div>
	       {elseif $error==0}
		    <div class="span4" style="margin-top: 10%;">
		    <div class="prueba alert alert-success">
		    
		      Contraseña cambiada con exito
		      </div>
		    </div>
		 
		    
		    
	       {/if}
		</fieldset>
</form>
