<?php /* Smarty version Smarty-3.1.13, created on 2013-06-04 19:38:39
         compiled from "templates/venta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212953602651a2ca4062c314-06283806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fd7ceb2499035dc2dfdf11f805bc6c78ba56440' => 
    array (
      0 => 'templates/venta.tpl',
      1 => 1370369963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212953602651a2ca4062c314-06283806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a2ca4066a078_21750012',
  'variables' => 
  array (
    'pdf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a2ca4066a078_21750012')) {function content_51a2ca4066a078_21750012($_smarty_tpl) {?> <div class="well span7">

			<h1>
				Consulta de Ventas
			</h1>
			<hr>
			<div class="row-fluid">
				<div class="span">
					<table class="table table-hover table-bordered tabla">
						<thead>
							<tr>
								<th>
									Folio
								</th>
								<th>
									Fecha
								</th>
								<th>
									Cantidad
								</th>
								<th>
									Precio(C/U)
								</th>
								<th>
									Total
								</th>
								<th>
									Estatus
								</th>
								
							</tr>
						</thead>
						<tbody>
							<!-- Crear el Script para la consulta SQL -->
							<tr>
								<td>
									1
								</td>
								<td>
									2012-04-11
								</td>
								<td>
									15
								</td>
								<td>
									150
								</td>
								<td>
									750
								</td>
								<td>
									Valida
								</td>
								
							</tr>
						</tbody>
					</table>
					<a href="temp/<?php echo $_smarty_tpl->tpl_vars['pdf']->value;?>
.pdf" target="_blank"> <button class="btn btn-primary">Generar Reporte</button></a>
                    
			</div>
			<div class="row-fluid">
			</div>
			<hr>
					  
		
	</div>
</div>
<?php }} ?>