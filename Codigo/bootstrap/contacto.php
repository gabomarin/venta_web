<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Tapetes:: Contactanos</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="css/bootstrap.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

<div class="container">
  <header>
  <!--  <a href="/index.html"><img margin:auto alt="imagenes/fondo.jpg" name="logo" width="1020" height="123" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a>
 -->
	<?php
	require_once("header.html");
	?> 
  </header>

  
  <div class="container2">
	<div class="container1">
		<article class="content">
			<!-- Column one start -->
		  <section class="container3"><br>
		  
		    <?php
		      echo '<br><h2 align=center>Contacto</h2>';
			     //Si la variable de estado existe entrar y ver que valor tiene
			if( isset( $_GET['estado'] ) )
			{
			  if( $_GET['estado']=='enviado' )
			  {
			       echo "<br><br>Su mensaje fue enviado correctamente";
			       echo "<br><br><a href='index.php'>VOLVER</a>";
			  }
			  else if( $_GET['estado']=='no_enviado' )
			  {
			       echo "<br><br><b>Upss!!,</b> Ocurrio un error. SU MENSAJE NO PUEDE SER ENVIADO EN ESTE MOMENTO.";
			  }
			}
		     else
		      {
			echo '<p>Si lo deseas desde esta seccion puedes enviar un mensaje al administrador del sitio, algun comentario o sugerencia.<p>';
			     //muestra el formulario para capturar los datos del correo
			require("cajamsg.html");
		      }
		      echo '<br><br>';
		      ?>

		     <p>
			Tel. 33 36851801<br>
			Cel. 3311489654 <br>
			Email: <a href="mailto:gpodinamica@hotmail.com">gpodinamica@hotmail.com</a>
			</p>
		  </section>
		  

  		  <!-- Column one end -->
		  
		</article>
		
		<div class="sidebar">
			<!-- Column two start -->
		  <?php
		     require_once("sidebar.html");
		  ?>
			<!-- Column two end -->
		</div>
	</div>
</div>
  

  
  <footer>    
    <?php
      require_once("footer.html");
    ?>
    
    
  </footer>
  
  <!-- end .container --></div>
</body>
</html>
