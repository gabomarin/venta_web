<head>
  <style>
	  .datos{
		  color:#006DCC;
		  font-size:medium;
		  font-weight: bold;
	  }
	  .mensaje{
	    height: 15px;
	  }
	  .contenedorAlto{
	    height: 5em;
	  }
	  .bajar{
			margin-top: 150px;
		  }
	</style>
	<script type="text/javascript" src="bootstrap/js/validaContacto.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  </head>
  <body>
    <form class="form-horizontal well span7" method="post" action="index.php?modulo=estandar&action=contacto" id="registrar"  name="registrar">
	<!-- Form Name -->
	<h1>Contacto</h1>
	<hr>

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
		  <div class="mensaje alert alert-sintaxis  span3" id="errorNombre" style="width: 300px" >Solo letras</div>
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
		  <div class="mensaje alert alert-sintaxis  span4" id="errorNombre" style="width: 300px" >formato: ejemplo@dominio.com</div>
		</div>
		<!-- Textarea -->
		<div class="contenedorAlto control-group" style="height: 170px">
			<label class="control-label" >Descripcion</label>
			<div class="span4" style="margin-left: 20px; resize: none" id="contenedorDescripcion">
				<textarea id="descripcion" name="descripcion" rows="8" cols="8" ></textarea>
			</div>
		</div>
		<div class="contenedorAlto control-group" style="display: none" id="errorDescripcion" style="width: 300px; margin-bottom: 0px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px" >Este Campo no puede estar vacio</div>
		</div>
		<input type="hidden" id="tipo" name="tipo" value="0"/>
		<input type="hidden" id="estatus" name="estatus" value="0"/>
		  <div class="controls">
		    <button type="reset" id="limpiar" name="limpiar" class="btn btn-danger">Limpiar</button>
		    <button type="button" id="enviar" name="enviar" class="btn btn-success" onclick="envia()">Enviar</button>
		  </div>
	<hr>
	<div class="span4 offset7">
	<br />
	<br />
		<p class="datos">
			Avenida de los perros #563-A
			<br />
			<br />
			Telefono: 323232464	

		</p>

		
	</div>
	</form>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
