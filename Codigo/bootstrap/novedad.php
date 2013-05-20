<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title> Grupo Fragsa:: Tapetes Antifatiga Novedad Importacion </title> <!-- Despues de los dos puntos se le agrega el titulo de la pagina -->
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="css/bootstrap.css" rel="stylesheet">
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
	<div class="navbar-text pull-right">
		<article class="content">
			<!-- Column one start -->

		  <section class= "container3">
			<div  style="text-align:center;" ><img src="/imagenes/novedadHeader.png" alt="novedad"></div>
			<br>
			<div  style="text-align:center;" ><img  src="imagenes/importacion_nuevo.png" alt="clasico" /></div>
			<br>
			<h1 style="color: red">  DESCRIPCIÓN</h1>
			
			<p>La construcción abierta del producto permite una fácil limpieza, brinda confort y seguridad; reduciendo la fatiga en personas que pasan mucho tiempo de pie.</p>
			<p>Es su estructura durable, flexible y de Hule SBR-Natural que le confiere dichas propiedades.</p>
			<p>La composición de Hule SBR-Natural brinda una excelente resistencia durable a los productos químicos, grasas y detergentes que se encuentran en la industria o ambientes de servicio de comida.</p>
			<p><b>Colores</b>: Negro</p>
			<p><b>Medida</b>: 0.82m X 1.10m .</p>
			
			<h1 style="color: red">VENTAJAS</h1>
			<UL>
				<LI>Anti-fatiga para prevenir trastornos músculo-esquelético.</LI>
				<LI>Provee resistencia a resbalamientos.</LI>
				<LI>No prolifera formación de hongos.</LI>
				<LI>Excelente resistencia a una amplia variedad de químicos, grasas y detergentes que se encuentran en medios ambientales industriales y alimenticios.</LI>
				<LI>La superficie permite que carros y personas circulen fácilmente.</LI>
				<LI>Tiene una construcción cerrada, lo que permite un excelente aseo porque no guarda residuos como en los que tienen perforaciones.</LI>
				<LI>Tiene una alta adherencia a cualquier superficie ya sea con liquidos, grasas y cualquier otro agente jabonoso ( No se desplaza aun en las peores condiciones ) .</LI>
				<LI>Buen aislante al frio y a la humedad.</LI>
			</UL>

			<h1 style="color: red">APLICACIONES</h1>
			<UL>
				<LI>Áreas de preparacion de alimentos.</LI>
				<LI>Áreas de lavado de utensilios de cocina.</LI>
				<LI>Estaciones de trabajo en bares y restaurantes.</LI>
				<LI>Líneas de ensamble y producción.</LI>
				<LI>Talleres de mantenimiento.</LI>
				<LI>Plantas embotelladoras.</LI>
				<LI>Cualquier otra área que requiera un material anti-fatiga y anti-deslizante.</LI>
			</UL>
			<br>
			  <br>
			
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
