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
		  <div class="span4" >
		    <input id="nombre" name="nombre" type="text" placeholder="Escriba su nombre completo" class="input-xmedium" pattern="^([a-zA-Z]{2,} ?)*[a-zA-Z]{2,}$" maxlength="25" required="required" autocomplete="on">
		    
		  </div>
		</div>
		<div class="contenedorAlto control-group" id="errorNombre" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" id="errorNombre2" style="display: none" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span3" style="width: 300px" >Solo letras</div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label">E-mail</label>
		  <div class="span4" >
		    <input id="mail" class="input-xmedium" name="mail" type="email" placeholder="ejemplo@dominio.com" class="input-xlarge" maxlength="40" required="required" autocomplete="off">
		    
		  </div>
		</div>
		<div class="contenedorAlto control-group" style="display: none" id="errorMail" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px" >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" style="display: none" id="errorMail2" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span4" style="width: 300px" >formato: ejemplo@dominio.com</div>
		</div>
		<!-- Password input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Contraseña</label>
		  <div class="span4" >
		    <input id="pass" class="input-medium" name="pass" type="password" class="input-xlarge" pattern="^([a-zA-Z]|\d){6,}$"  maxlength="25" required="required">
		    
		  </div>
		</div>
		<div class="contenedorAlto control-group" style="display: none" id="errorPass" style="width: 300px" >
		    <div class="mensaje alert alert-error span4"  style="width: 300px" >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" style="display: none" id="errorPass2" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span4" style="width: 300px" >Solo letras y numeros(Minimo de 6)</div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto  control-group">
		  <label class="control-label">Direccion</label>
		  <div class="span4" >
		    <input id="direccion" class="input-xmedium" name="direccion" type="text" placeholder="Ejemplo: Calle #0" class="input-xlarge" pattern="^([a-zA-Z]{2,})+( {1}([a-zA-Z]|\d)+)* #\d+(-(\d|[a-zA-Z]){1,2})?$" maxlength="25" required="required" autocomplete="on">
		    
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
		    <input id="rfc" class="input-medium" name="rfc" type="text" class="input-xlarge" pattern="^([a-zA-Z]|\d){13}$"maxlength="13" required="required" autocomplete="off">
		    
		  </div>
		</div>
		<div class="contenedorAlto control-group" style="display: none" id="errorRfc" style="width: 300px" >
		    <div class="mensaje alert alert-error span4"  style="width: 300px" >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" style="display: none" id="errorRfc2" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span4" style="width: 300px" >Formato Incorrecto(Exactamente 13)</div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Telefono</label>
		  <div class="span4" >
		    <input id="telefono" class="input-medium" name="telefono" type="tel" class="input-xlarge" pattern="^(\d){10}$" maxlength="10" required="required" autocomplete="on">
		    
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
	</form>

  </body>
