<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 22:30:11
         compiled from "templates\venta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43351a2c533cb9189-90436124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b44b0842469493fd17e1942231861b9dd50c6df7' => 
    array (
      0 => 'templates\\venta.tpl',
      1 => 1369619440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43351a2c533cb9189-90436124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pdf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a2c533e2fe79_71599323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a2c533e2fe79_71599323')) {function content_51a2c533e2fe79_71599323($_smarty_tpl) {?> <div class="well span7">

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