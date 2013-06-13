<?php /* Smarty version Smarty-3.1.13, created on 2013-06-08 20:08:45
         compiled from "templates\consulta_compra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2059451b0c809038400-21929263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41e8ee476e9e252201ae3b42d8733e8663c5d443' => 
    array (
      0 => 'templates\\consulta_compra.tpl',
      1 => 1370653412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2059451b0c809038400-21929263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b0c8091c5e63_30521260',
  'variables' => 
  array (
    'ventas' => 0,
    'venta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b0c8091c5e63_30521260')) {function content_51b0c8091c5e63_30521260($_smarty_tpl) {?><style type="text/css">
		span{
			  color:#8B8B8B;
		  }
		  
		  .pdf
		  {
			border: solid 1px #000;
		  }
		  
		  table
{
border-collapse:collapse;
}
table,th, td
{
border: 1px solid black;
}

 </style>


<body>
  <div class="well span7" >
	<h1>Consulta Compras</h1>
    <hr>

	<div class="row-fluid">

	 
        <?php if (is_array($_smarty_tpl->tpl_vars['ventas']->value)){?>
        <table class="table table-hover table-bordered tabla pdf" >
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
									Factura
								</th>
                                
                                
                                
								
							</tr>
		</thead>
         <tbody>   
		<?php  $_smarty_tpl->tpl_vars['venta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['venta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ventas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['venta']->key => $_smarty_tpl->tpl_vars['venta']->value){
$_smarty_tpl->tpl_vars['venta']->_loop = true;
?>
					
						
							<!-- Crear el Script para la consulta SQL -->
							<tr>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['venta']->value['factura_id'];?>

								</td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['venta']->value['fecha'];?>

								</td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['venta']->value['cantidad'];?>

								</td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['venta']->value['precio'];?>

								</td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['venta']->value['total'];?>

								</td>
								    <td>
									<a href="index.php?modulo=factura&action=pdf&id=<?php echo $_smarty_tpl->tpl_vars['venta']->value['id'];?>
"  target="_blank" id="factura">PDF</a>
								</td>

								
							</tr>
					
					
		<?php } ?>
        	</tbody>

         
         
        </table>  
        <?php }else{ ?>
        <p><?php echo $_smarty_tpl->tpl_vars['ventas']->value;?>
</p>
        <?php }?>

	</div>
  </div>

<?php }} ?>