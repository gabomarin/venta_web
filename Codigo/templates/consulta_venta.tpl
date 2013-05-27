<div class="well span7">
 <legend><h1>Consulta de Ventas</h1></legend>
 
  
 <br>
  <br>
 <form class="form-search " action="index.php?modulo=venta&action=consulta" method="post">

   <div class="span12">
	   <h2 class=>Listar por Fecha</h2>
	   <div class="control-group" style="height: 70px">
	     <div class="span12">
	       <input id="dato" name="dato" required="required">		
		     <input type="hidden" >
	       </div>
	     <div class="controls">
	       <button type="submit" id="action" name="singlebutton" class="btn btn-primary">Buscar</button>
	       </div>
	   </div>
   </div>

  
 </form>
 
 
 <br>
  <form action="index.php?modulo=venta&action=listar" method="post">
	<div class="control-group">
		  <h2 class="titulo">Listar todos</h2>
	    
			  <button id="listar" name="listar" type="submit" class="btn btn-success">Buscar</button>

		</div>

	
  </form>

</div>


   <script type="text/javascript" src="datepicker/ng_all.js"></script>
<script type="text/javascript" src="datepicker/components/calendar.js"></script>
<script type="text/javascript">
	 
ng.ready( function() {
    var my_cal = new ng.Calendar({
        input:'dato',
        date_format:'Y-m-d',
        server_date_format:'Y-m-d',
        start_date:'year-8',
        display_date:'today',
        allow_weekend_selection:true
    });
});
</script>

 
 
 
 
  <!--<form class="form-search" action="index.php?modulo=inventario&action=cosultarDato">
  	<div class="row-fluid">
  <div class="span12">
    <h1 class="titulo">Consulta de Inventario</h1>
    <div class="row-fluid contenedor">
      <div class="span4 hero-unit">
      		<!-- Search input
		<div class="row pagination-centered">
			<div class="control-group">
				<h2 class=>Listar por Fecha</h2>
				<div class="controls input-append">
				    <input id="fecha" name="fecha" type="date" required="required">
				    <button type="submit" id="$action2" name="singlebutton" class="btn btn-primary">Buscar</button>
			  	</div>
			</div>
		</div>
      </div>
      <div class="span4">
      	<p class="lead intermedio">OR</p>
      </div>
      <div class="span4 hero-unit">
	      <!-- Button 
		<div class="control-group">
		  <h2 class="titulo">Listar todos</h2>
		  <div class="controls">
		    <a href="index.php?modulo=inventario&action=listar"><button id="listar" name="listar" type="button" class="btn btn-success">Buscar</button></a>
		  </div>
		</div>
      </div>
    </div>
  </div>
  <!-- Tabla de Busqueda 
  <div class="span6">
  	<table class="table table-hover table-bordered tabla">
  		<thead>
  			<tr>
  				<th>#</th>
  				<th>Fecha</th>
  				<th>Cantidad Producto</th>
  				<th>Cantidad Real</th>
  				<th>Cantidad Esperada</th>
  				<th>Descripcion</th>
  			</tr>
  		</thead>
  		<tbody>
  			<!-- Crear el Script para la consulta SQL 
  			<tr>
  				<td>1</td>
  				<td>2012-04-11</td>
  				<td>15</td>
  				<td>150</td>
  				<td>170</td>
  				<td>Esta chafa</td>
  			</tr>
  		</tbody>
  	</table>
  </div>
</div>
  </form>-->
