<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 00:31:52
         compiled from "templates/venta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212953602651a2ca4062c314-06283806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fd7ceb2499035dc2dfdf11f805bc6c78ba56440' => 
    array (
      0 => 'templates/venta.tpl',
      1 => 1371187890,
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
    'ventas' => 0,
    'venta' => 0,
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
				<div class="span12">
		                  <?php if (is_array($_smarty_tpl->tpl_vars['ventas']->value)){?>
					<table class="table table-hover table-bordered tabla">
						<thead>
							<tr>
								<th>
									ID
								</th>
								<th>
									Fecha
								</th>

								<th>
									Total
								</th>
								<th>
									Cliente
								</th>
								
							</tr>
						</thead>
						
						<tbody>
							<!-- Crear el Script para la consulta SQL -->
							<?php  $_smarty_tpl->tpl_vars['venta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['venta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ventas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['venta']->key => $_smarty_tpl->tpl_vars['venta']->value){
$_smarty_tpl->tpl_vars['venta']->_loop = true;
?>
							<tr>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['venta']->value['id'];?>

								</td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['venta']->value['fecha'];?>

								</td>
								<td>
								        <?php echo $_smarty_tpl->tpl_vars['venta']->value['total'];?>

								</td>
								<td>
								        <?php echo $_smarty_tpl->tpl_vars['venta']->value['nombre'];?>

								</td>
								
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<a href="temp/<?php echo $_smarty_tpl->tpl_vars['pdf']->value;?>
.pdf" target="_blank"> <button class="btn btn-primary">Generar Reporte PDF</button></a>
					<a href="temp/reporte.xls" target="_blank"> <button class="btn btn-primary">Generar Reporte EXCEL</button></a>
                    
			</div>
			<div class="row-fluid">
			</div>
			<hr>
		<?php }else{ ?>
        <p><?php echo $_smarty_tpl->tpl_vars['ventas']->value;?>
</p>
        <?php }?>			  
		
	</div>
</div>
<?php }} ?>