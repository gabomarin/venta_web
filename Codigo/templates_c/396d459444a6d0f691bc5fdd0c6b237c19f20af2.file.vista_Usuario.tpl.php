<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 02:23:37
         compiled from "templates/vista_Usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162383337251a2772ba77728-07600905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '396d459444a6d0f691bc5fdd0c6b237c19f20af2' => 
    array (
      0 => 'templates/vista_Usuario.tpl',
      1 => 1371194611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162383337251a2772ba77728-07600905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a2772bb2cb40_92718855',
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a2772bb2cb40_92718855')) {function content_51a2772bb2cb40_92718855($_smarty_tpl) {?>  <style type="text/css">
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

	 
        <?php if (is_array($_smarty_tpl->tpl_vars['usuarios']->value)){?>
        <table class="table table-hover table-bordered tabla">
						<thead>
							<tr>
								<th>
									ID
								</th>
								<th>
									Nombre
								</th>
								<th>
									Correo
								</th>
								<th>
									RFC
								</th>
								<th>
									Direccion
								</th>
								<th>
									Tipo
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
		<?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
					
						
							<!-- Crear el Script para la consulta SQL -->
			    
							<tr>
							<form action="index.php?modulo=usuario&action=checaUsuario" method="post">	      
								<td >
								      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" id="id" name="id" >
									<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>

								</td>
								<td >
								      <input type="hidden" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
" >
									<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>

								</td>
								<td >
								      <input type="hidden" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['mail'];?>
" >
									<?php echo $_smarty_tpl->tpl_vars['usuario']->value['mail'];?>

								</td>
								<td >
								      <input type="hidden" id="rfc" name="rfc" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['rfc'];?>
" >
									<?php echo $_smarty_tpl->tpl_vars['usuario']->value['rfc'];?>

								</td>
								<td >
								      <input type="hidden" id="direccion" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['direccion'];?>
" >
									<?php echo $_smarty_tpl->tpl_vars['usuario']->value['direccion'];?>

							        <td style="display: none">
								      <input type="hidden" id="telefono" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['telefono'];?>
"  >
									<?php echo $_smarty_tpl->tpl_vars['usuario']->value['telefono'];?>

								</td>
								<td >
								      <input type="hidden" id="tipo" name="tipo" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['tipo'];?>
" >
									<?php if ($_smarty_tpl->tpl_vars['usuario']->value['tipo']==1){?>
                                    Cliente
                                    <?php }elseif($_smarty_tpl->tpl_vars['usuario']->value['tipo']==2){?>
                                    Ventas
                                    
                                    <?php }else{ ?>
                                    Inventario
                                    <?php }?>
								</td>
                                <td>
                                <?php if ($_smarty_tpl->tpl_vars['usuario']->value['estatus']==1){?>
                                Activo
                                <?php }else{ ?>
                                Inactivo
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
        <p><?php echo $_smarty_tpl->tpl_vars['usuarios']->value;?>
</p>
        <?php }?>

	</div>
  </div>

<?php }} ?>