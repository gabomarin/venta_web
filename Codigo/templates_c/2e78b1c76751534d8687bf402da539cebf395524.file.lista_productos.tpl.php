<?php /* Smarty version Smarty-3.1.13, created on 2013-06-12 21:01:15
         compiled from "templates/lista_productos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53701821551b38b718d0a76-19339496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e78b1c76751534d8687bf402da539cebf395524' => 
    array (
      0 => 'templates/lista_productos.tpl',
      1 => 1371066909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53701821551b38b718d0a76-19339496',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b38b71932d37_80129458',
  'variables' => 
  array (
    'lista' => 0,
    'productos' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b38b71932d37_80129458')) {function content_51b38b71932d37_80129458($_smarty_tpl) {?><div class="well span7" >
    <legend><h1><?php echo $_smarty_tpl->tpl_vars['lista']->value;?>
</h1></legend>
   <?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->key => $_smarty_tpl->tpl_vars['producto']->value){
$_smarty_tpl->tpl_vars['producto']->_loop = true;
?>
    <div class="span2">
        <a href="index.php?modulo=producto&action=consultarDato&dato=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
&atributo=id class='name'">
            <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" alt='' width='124' height='097' /></a>
        <br>
            <span>$ <?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</span>
        <a href="index.php?modulo=producto&action=consultarDato&dato=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
&atributo=id">Ver</a>   
    </div>
    <?php } ?>
    
</div><?php }} ?>