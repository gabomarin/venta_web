<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 21:52:03
         compiled from "templates/consulta_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129259571251a1a2ad8541d7-35046752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f818e195f67c371b63f3330460a04f7558206baf' => 
    array (
      0 => 'templates/consulta_usuario.tpl',
      1 => 1369622750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129259571251a1a2ad8541d7-35046752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a1a2ad888c18_56783836',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1a2ad888c18_56783836')) {function content_51a1a2ad888c18_56783836($_smarty_tpl) {?><div class="well span7">
 <legend><h1>Consulta de usuario</h1></legend>
 
  
 <br>
  <br>
 <form  action="index.php?modulo=usuario&action=consultar" method="post">

			<div class="control-group">
				<h2 class=>Buscar por nombre</h2>
				<div class="controls">
				    <input id="nombre" name="nombre" required="required">

				    <button type="submit" id="button" name="button" class="btn btn-primary">Buscar</button>
			  	</div>
			</div>

  
 </form>
 
 
 <br>
  <form  action="index.php?modulo=usuario&action=listar" method="post">
	<div class="control-group">
		  <h2 class="titulo">Listar todos</h2>
		  <div class="controls">
		    
			  <button id="listar" name="listar" type="submit" class="btn btn-success">Buscar</button>
		  </div>
		</div>

	
  </form>

</div>



 
 
 
 
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
<?php }} ?>