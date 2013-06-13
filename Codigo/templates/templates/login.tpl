<head>
  <style>
    .tam{
      width: 600px;
      height: 60px
    }
    .prueba{
      display:inline;
      float:left;
    }
  </style>
  <script type="text/javascript" src="bootstrap/js/validaLogin.js"></script>
  </head>
<body>
	<div class="well span7">
		 <div class="container span4 offset3">
	    <div class="content">
	      <div class="row">
	        <div class="login-form">
	          <h1 style="height: 60px">Login</h1>
	          <form action="index.php?modulo=estandar&action=login" method="POST" id="registrar"  name="registrar">
	            <fieldset>
		      <div class="tam">
			<div class="prueba" id="contenedorMail">
			  <input id="mail" class="input-large" name="mail" type="email" placeholder="Email" required="required" autocomplete="on" autofocus onkeypress="mandar(event);">
			</div>
		    </div>
			<div class="tam">
			  <div class="prueba" id="contenedorPass">
			  <input id="pass" class="input-large" name="pass" type="password" placeholder="Pass" required="required" onkeypress="mandar(event);">
			
			  </div>
		    </div>
			<div class="span8">
			  <button class="btn btn-primary prueba" type="button" onclick="envia()">Sign in</button>
			</div>
		      {if $error != ""}
			<div class="tam" style="margin-top: 10%;">
			<div class="prueba alert alert-error">
			
			  {$error}
			  </div>
			</div>
			{/if}
	            </fieldset>
	          </form>
	        </div>
	      </div>
	    </div>
	  </div> <!-- /container -->
	</div>
 
</body>
</html>