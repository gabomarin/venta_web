<head>
	<style>

		  .contenedorAlto{
		    height: 48px;
		  }
		  .bajar{
			margin-top: 170px;
		  }
	</style>
	<script type="text/javascript" src="bootstrap/js/validaInventario.js"></script>
  </head> 
   <form class="form-horizontal well span7" method="post" action="index.php?modulo=inventario&action=insertar" id=registrar name=registrar>
		<fieldset>
		
		<!-- Form Name -->
		<legend><h1>Registrar Inventario</h1></legend>
		
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Cantidad de Producto</label>
		  <div class="span4">
		    <input id="cantidadProducto" name="cantidadProducto" type="text" class="input-small" pattern="^(\d)+$" min="0" required="required" autocomplete="off">
		  </div>
		</div>
		<div class="contenedorAlto control-group" id="errorCantidadProducto" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" id="errorCantidadProducto2" style="display: none" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span3" style="width: 300px" >Solo numeros</div>
		</div>
		<!-- Text input-->
		<div class="contenedorAlto control-group">
		  <label class="control-label">Cantidad Real</label>
		  <div class="span4">
		    <input id="cantidadReal" name="cantidadReal" type="text" class="input-small" pattern="^(\d)+$" min="0" required="required" autocomplete="off">
		  </div>
		</div>
		<div class="contenedorAlto control-group" id="errorCantidadReal" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" id="errorCantidadReal2" style="display: none" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span3" style="width: 300px" >Solo numeros</div>
		</div>
		<div class="contenedorAlto control-group">
		  <label class="control-label">Cantidad Esperada</label>
		  <div class="span4">
		    <input id="cantidadEsperada" name="cantidadEsperada" type="text" class="input-small" pattern="^(\d)+$" min="0" required="required" autocomplete="off">
		  </div>
		</div>
		<div class="contenedorAlto control-group" id="errorCantidadEsperada" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" id="errorCantidadEsperada2" style="display: none" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span3" style="width: 300px" >Solo numeros</div>
		</div>
		<div class="contenedorAlto control-group">
		  <label class="control-label" pattern="^(\d){4}-(\d){2}-(\d){2}$">Fecha</label>
		  <div class="span4" id="contenedorFecha">
		    <!--<input id="fecha" name="fecha" type="text" class="reporte_termino"size="12"/>-->
			
		  <input type="text" id="fecha" name="fecha" />			
		  </div>
		</div>
		<div class="contenedorAlto control-group" id="errorFecha" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		<div class="contenedorAlto control-group" id="errorFecha2" style="display: none" style="width: 300px" >
		  <div class="mensaje alert alert-sintaxis  span4" style="width: 300px" >formato: YYYY-MM-DD</div>
		</div>
		<!-- Textarea -->
		<div class="contenedorAlto control-group" style="height: 170px">
			<label class="control-label">Descripcion</label>
			<div class="span4" style="margin-left: 20px; resize: none" >
				<textarea id="descripcion" name="descripcion" rows="8" cols="8" ></textarea>
			</div>
		</div>
		<div class="contenedorAlto control-group" id="errorDescripcion" style="display: none" style="width: 300px" >
		    <div class="mensaje alert alert-error span4" style="width: 300px"  >Este Campo no puede estar vacio</div>
		</div>
		  <div class="controls">
		    <button type="reset" id="limpiar" name="limpiar" class="btn btn-danger">Limpiar</button>
		    <button type="button" id="enviar" name="enviar" class="btn btn-success" onclick="envia()">Crear Inventario</button>
		  </div>
		</fieldset>

	</form>
   
   <script type="text/javascript" src="datepicker/ng_all.js"></script>
<script type="text/javascript" src="datepicker/components/calendar.js"></script>
<script type="text/javascript">
	 
ng.ready( function() {
    var my_cal = new ng.Calendar({
        input:'fecha',
        date_format:'Y-m-d',
        server_date_format:'Y-m-d',
        start_date:'year-8',
        display_date:'today',
        allow_weekend_selection:true
    });
});
</script>

   
