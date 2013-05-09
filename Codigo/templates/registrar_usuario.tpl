<!DOCTYPE html>
<html>
  <head>
    <title>Registrar Usuario</title>
    <meta name="author" content="Lex" />
	<meta charset="UTF-8"/>
	<meta name="keywords" content="Registrar Usuario"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <form class="well form-horizontal" method="post" action="index.php?modulo=usuario&action=insertar">
		<fieldset>
		
		<!-- Form Name -->
		<legend>Registrar Usuario</legend>
		
		<!-- Text input-->
		<div class="control-group">
		  <label class="control-label">Nombre</label>
		  <div class="controls">
		    <input id="nombre" name="nombre" type="text" placeholder="Escriba su nombre completo" class="input-xlarge" pattern="^([a-zA-Z]{2,} ?)*[a-zA-Z]{2,}$" maxlength="25" required="required" autocomplete="on">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="control-group">
		  <label class="control-label">E-mail</label>
		  <div class="controls">
		    <input id="mail" name="mail" type="email" placeholder="ejemplo@dominio.com" class="input-xlarge" maxlength="25" required="required" autocomplete="off">
		    
		  </div>
		</div>
		
		<!-- Password input-->
		<div class="control-group">
		  <label class="control-label">Contraseña</label>
		  <div class="controls">
		    <input id="pass" name="pass" type="password" class="input-xlarge" pattern="^([a-zA-Z]|\d){6,}$"  maxlength="25" required="required">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="control-group">
		  <label class="control-label">Direccion</label>
		  <div class="controls">
		    <input id="direccion" name="direccion" type="text" placeholder="Ejemplo: Calle #0" class="input-xlarge" pattern="^([a-zA-Z]{2,})+( {1}([a-zA-Z]|\d)+)* #\d+(-(\d|[a-zA-Z]){1,2})?$" maxlength="25" required="required" autocomplete="on">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="control-group">
		  <label class="control-label">RFC</label>
		  <div class="controls">
		    <input id="rfc" name="rfc" type="text" class="input-xlarge" pattern="^([a-zA-Z]|\d){13}$"maxlength="13" required="required" autocomplete="off">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="control-group">
		  <label class="control-label">Telefono</label>
		  <div class="controls">
		    <input id="telefono" name="telefono" type="tel" class="input-xlarge" pattern="^(\d)+$" maxlength="15" required="required" autocomplete="on">
		    
		  </div>
		</div>
		<input type="hidden" id="tipo" name="tipo" value="0"/>
		<input type="hidden" id="estatus" name="estatus" value="0"/>
		  <div class="controls">
		    <button type="reset" id="limpiar" name="limpiar" class="btn btn-danger">Limpiar</button>
		    <button type="submit" id="enviar" name="enviar" class="btn btn-success">Crear mi Cuenta</button>
		  </div>
		</fieldset>
	</form>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>