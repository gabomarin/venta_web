<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 02:33:00
         compiled from "templates/vista_Producto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187981400551bac72cd01446-64945929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '663d0b66df48ac46c7bcca283ff4f1f7d7b57b7c' => 
    array (
      0 => 'templates/vista_Producto.tpl',
      1 => 1371194941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187981400551bac72cd01446-64945929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bac72cdbbf33_90138002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bac72cdbbf33_90138002')) {function content_51bac72cdbbf33_90138002($_smarty_tpl) {?>  <style type="text/css">
		span{
			  color:#8B8B8B;
		  }

  </style>

  <title></title>
</head>

<body>
  <div class="well span7">
	<h3>Resultados de Busqueda</h3>
    <hr>

	<div class="row-fluid">

	 
        <?php if (is_array($_smarty_tpl->tpl_vars['productos']->value)){?>
        <table class="table table-hover table-bordered tabla">
						<thead>
							<tr>
								<th>
									ID
								</th>
								<th>
									Imagen
								</th>
								<th>
									Nombre
								</th>
								<th>
									Descripcion
								</th>
								<th>
									Precio
								</th>
								
                                <th>
                                    Estatus
                                </th>
                                <th>
                                    Editar
                                </th>
                               
								
							</tr>
		</thead>
         <tbody>   
		<?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->key => $_smarty_tpl->tpl_vars['producto']->value){
$_smarty_tpl->tpl_vars['producto']->_loop = true;
?>
					
						
							<!-- Crear el Script para la consulta SQL -->
							<tr>
								<form action="index.php?modulo=producto&action=checaProducto" method="post">	      
								<td >
								      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
" id="id" name="id" >
									<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>

								</td>
								<td >
								      <input type="hidden" id="imagen" name="imagen" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" >
									<img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" height="70px" width="70px">
								</td>
								<td >
								      <input type="hidden" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
" >
									<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>

								</td>
								
								<td >
								      <input type="hidden" id="descripcion" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
" >
									<?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>

								</td>
								<td >
								      <input type="hidden" id="precio" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
" >
									$ <?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>

								</td>
								
                                <td>
                                <?php if ($_smarty_tpl->tpl_vars['producto']->value['estatus']==1){?>
									<input type="hidden" id="estatus" name="estatus" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['estatus'];?>
" >
									<input type="hidden" id="categoria" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['categoria'];?>
" >
									<input type="hidden" id="existencia" name="existencia" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['existencia'];?>
" >
                                Disponible
                                <?php }else{ ?>
                                Agotado
                                <?php }?>
                                </td>
                                <td>
                                   <button type="submit" class="offset2" >Editar</button> 
                                </td>
                                
			</form>				
								
							</tr>
					
					
		<?php } ?>
        	</tbody>
         
         
        </table>        
        <?php }else{ ?>
        <p><?php echo $_smarty_tpl->tpl_vars['producto']->value;?>
</p>
        <?php }?>

	</div>
  </div>

<?php }} ?>