<head>
  <style>
	  .mensaje{
	    height: 15px;
	  }
	  .contenedorAlto{
	    height: 48px;
	  }
	</style>
	<script type="text/javascript" src="bootstrap/js/validaUsuario.js"></script>
  </head>
  
  
  <body>
    <form class="well form-horizontal well span7" method="post" enctype="multipart/form-data" action="index.php?modulo=usuario&action=insertar" id="registrar"  name="registrar">
		<fieldset>
		
		<!-- Form Name -->
		<legend><h1>Registrar Usuario</h1></legend>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Nombre</label>
		  <div class="span4" id="contenedorNombre">
		    <input id="nombre" name="nombre" type="text" placeholder="Escriba su nombre completo" class="input-xmedium" pattern="^([a-zA-Z]{2,} ?)*[a-zA-Z]{2,}$" maxlength="25" required="required" autocomplete="on">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label">E-mail</label>
		  <div class="span4" id="contenedorMail">
		    <input id="mail" class="input-xmedium" name="mail" type="email" placeholder="ejemplo@dominio.com" class="input-xlarge" maxlength="25" required="required" autocomplete="off">
		    
		  </div>
		</div>
		
		<!-- Password input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Contraseña</label>
		  <div class="span4" id="contenedorPass">
		    <input id="pass" class="input-medium" name="pass" type="password" class="input-xlarge" pattern="^([a-zA-Z]|\d){6,}$"  maxlength="25" required="required">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label">Direccion</label>
		  <div class="span4" id="contenedorDireccion">
		    <input id="direccion" class="input-xmedium" name="direccion" type="text" placeholder="Ejemplo: Calle #0" class="input-xlarge" pattern="^([a-zA-Z]{2,})+( {1}([a-zA-Z]|\d)+)* #\d+(-(\d|[a-zA-Z]){1,2})?$" maxlength="25" required="required" autocomplete="on">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">RFC</label>
		  <div class="span4" id="contenedorRfc">
		    <input id="rfc" class="input-medium" name="rfc" type="text" class="input-xlarge" pattern="^([a-zA-Z]|\d){13}$"maxlength="13" required="required" autocomplete="off">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Telefono</label>
		  <div class="span4" id="contenedorTelefono">
		    <input id="telefono" class="input-medium" name="telefono" type="tel" class="input-xlarge" pattern="^(\d){10}$" maxlength="10" required="required" autocomplete="on">
		    
		  </div>
		</div>
		<input type="hidden" id="tipo" name="tipo" value="1"/>
		<input type="hidden" id="estatus" name="estatus" value="1"/>
		  <div class="controls">
		    <button type="reset" id="limpiar" name="limpiar" class="btn btn-danger">Limpiar</button>
		    <button type="button" id="enviar" name="enviar" class="btn btn-success" onclick="envia()">Crear mi Cuenta</button>
		  </div>
		</fieldset>
	</form>

  </body>
