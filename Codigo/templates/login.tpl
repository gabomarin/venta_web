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
			  <input id="mail" name="mail" type="email" placeholder="Email" required="required" autocomplete="on" autofocus>
			</div>
		      </div>
			<div class="tam">
			<div class="prueba" id="contenedorPass">
			  <input id="pass" name="pass" type="password" placeholder="Pass" required="required">
			</div>
		      </div>
	              <button class="btn btn-primary prueba" type="button" onclick="envia()">Sign in</button>
	            </fieldset>
	          </form>
	        </div>
	      </div>
	    </div>
	  </div> <!-- /container -->
	</div>
 
</body>
</html>