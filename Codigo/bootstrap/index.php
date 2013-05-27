<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta property="og:title" content="Tapetes" />
		<meta property="og:type" content="product" />
		<meta property="og:url" content="http://tapetes.mipropia.com" />
		<meta property="og:image" content="http://img21.imageshack.us/img21/3293/tapetesicon.png" />
		<meta property="og:site_name" content="Tapetes y plantillas" />
		<meta property="og:description" content="Empresa especializada en productos de seguridad y antifatiga" />
		<meta property="fb:admins" content="688175801" />
		
		<!-- TemplateBeginEditable name="doctitle" -->
		<title> Grupo Fragsa :: Inicio </title> <!-- Despues de los dos puntos se le agrega el titulo de la pagina -->
		<!-- TemplateEndEditable -->
		<!-- TemplateBeginEditable name="head" -->
		<!-- TemplateEndEditable -->
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link rel="stylesheet" href="/slideshow/style_slideShow.css" />
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<script type="text/javascript">
      var msg  = document.title;
      var speed = 150;
      var endChar = " ... ";
      var pos = 0;
       
      function moveTitle()
      {
        var ml = msg.length;
             
        title = msg.substr(pos,ml) + endChar + msg.substr(0,pos);
        document.title = title;
         
        pos++;
        if (pos > ml) pos=0;
        window.setTimeout("moveTitle()",speed);
      }
   
      moveTitle();
</script>
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
		    
		    <section class="container3">
			<br>
		      <img src="/imagenes/title2.png">
		    
		    	<ul id="slideshow">
			    <li>
				    <h3>Nuestra Gama de Productos</h3>
				    <span>/slideshow/photos/tapetes.png</span>
				    <p>Todo un mundo de opciones para su empresa</p>
				    <img src="/slideshow/thumbnails/tapetes.png" alt="tapetes" /></a>
			    </li>
				<li>
				    <h3>Tapete Antifatiga Clasico</h3>
				    <span>/slideshow/photos/clasico.png</span>
				    <p>Tapete Estandar para la industria en general</p>
				    <a href="/clasico.php"><img src="/slideshow/thumbnails/clasico.png" alt="clasico" /></a>
			    </li>
				<li>
				    <h3>Tapete Antifatiga de Importacion *** NUEVO ***</h3>
				    <span>/slideshow/photos/nuevo-importacion.png</span>
				    <p>Sin perforacion, antiderrapante, ideal para superficies en extremo resbalosas</p>
				    <a href="/novedad.php"><img src="/slideshow/thumbnails/nuevo-importacion.png" alt="nuevo-importacion" /></a>
			    </li>
				<li>
				    <h3>Tapete Antifatiga de Importacion "Larga vida"</h3>
				    <span>/slideshow/photos/importacion.png</span>
				    <p>Sin perforacion, Antiderrapante e Interconectable</p>
				    <a href="/otros.php"><img src="/slideshow/thumbnails/importacion.png" alt="importacion" /></a>
			    </li>
				<li>
				    <h3>Tapete Antifatiga de Importacion "Reversible"</h3>
				    <span>/slideshow/photos/importacion2.png</span>
				    <p>Antiderrapante, ideal para espacios con extrema humedad</p>
				    <a href="/otros.php"><img src="/slideshow/thumbnails/importacion2.png" alt="importacion2" /></a>
			    </li>
				<li>
				    <h3>Tapete Antifatiga de Importacion "Industrial"</h3>
				    <span>/slideshow/photos/importacion3.png</span>
				    <p>Para uso rudo y areas de alto riesgo</p>
				    <a href="/otros.php"><img src="/slideshow/thumbnails/importacion3.png" alt="importacion3" /></a>
			    </li>
				<li>
				    <h3>Tapete Antifatiga "Antibacterial"</h3>
				    <span>/slideshow/photos/antibacterial.png</span>
				    <p>Ideal para espacios esterilizados</p>
				    <a href="/antibacterial.php"><img src="/slideshow/thumbnails/antibacterial.png" alt="antibacterial" /></a>
			    </li>
				<li>
				    <h3>Plantillas Ergonomicas y Antifatiga</h3>
				    <span>/slideshow/photos/plantillas.png</span>
				    <p>Ideales para personas que permanecen largas jornadas de pie</p>
				    <a href="/plantillas.php"><img src="/slideshow/thumbnails/plantillas.png" alt="plantillas" /></a>
			    </li>
				<li>
				    <h3>Taloneras para Espolon</h3>
				    <span>/slideshow/photos/talonera.png</span>
				    <p>Ideales para corregir o evitar el molesto espolon</p>
				    <a href="/taloneras.php"><img src="/slideshow/thumbnails/talonera.png" alt="talonera" /></a>
			    </li>
				<li>
				    <h3>Piso Antiderrapante de Hule</h3>
				    <span>/slideshow/photos/piso.png</span>
				    <p>Ideal para areas resbalosas</p>
				    <a href="/piso.php"><img src="/slideshow/thumbnails/piso.png" alt="piso" /></a>
			    </li>
				<li>
				    <h3>Cinta Antiderrapante</h3>
				    <span>/slideshow/photos/cinta.png</span>
				    <p>Ideal para escalones y areas resbalosas</p>
				    <a href="/cinta.php"><img src="/slideshow/thumbnails/cinta.png" alt="cinta" /></a>
			    </li>
		    </ul>
		    <div id="wrapper">
			    <div id="fullsize">
				    <div id="imgprev" class="imgnav" title="Previous Image"></div>
				    <div id="imglink"></div>
				    <div id="imgnext" class="imgnav" title="Next Image"></div>
				    <div id="image"></div>
				    <div id="information">
					    <h3></h3>
					    <p></p>
				    </div>
			    </div>
			    <div id="thumbnails">
				    <div id="slideleft" title="Slide Left"></div>
				    <div id="slidearea">
					    <div id="slider"></div>
				    </div>
				    <div id="slideright" title="Slide Right"></div>
			    </div>
			    <br />
		    </div>
		      <script type="text/javascript" src="/slideshow/compressed.js"></script>
		      <script type="text/javascript">
			      $('slideshow').style.display='none';
			      $('wrapper').style.display='block';
			      var slideshow=new TINY.slideshow("slideshow");
			      window.onload=function(){
				      slideshow.auto=true;
				      slideshow.speed=5;
				      slideshow.link="linkhover";
				      slideshow.info="information";
				      slideshow.thumbs="slider";
				      slideshow.left="slideleft";
				      slideshow.right="slideright";
				      slideshow.scrollSpeed=4;
				      slideshow.spacing=5;
				      slideshow.active="#fff";
				      slideshow.init("slideshow","image","imgprev","imgnext","imglink");
			      }
		      </script>
			  <br>
			  
		    </section>
			<section class="container3">
				<h1 style="font-size:12pts; text-align:center;">*Si es hule se lo conseguimos</h1>
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
