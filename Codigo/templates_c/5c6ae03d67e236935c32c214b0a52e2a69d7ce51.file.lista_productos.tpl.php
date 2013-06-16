<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 01:39:30
         compiled from "templates\lista_productos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318051b389b365fa52-63734960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c6ae03d67e236935c32c214b0a52e2a69d7ce51' => 
    array (
      0 => 'templates\\lista_productos.tpl',
      1 => 1371186646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318051b389b365fa52-63734960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b389b3733d25_06352807',
  'variables' => 
  array (
    'lista' => 0,
    'productos' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b389b3733d25_06352807')) {function content_51b389b3733d25_06352807($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\xampp\\htdocs\\td_informatica\\Codigo\\smarty\\plugins\\function.counter.php';
?><div class="well span7" >
    <legend><h1><?php echo $_smarty_tpl->tpl_vars['lista']->value;?>
</h1></legend>
   <?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->key => $_smarty_tpl->tpl_vars['producto']->value){
$_smarty_tpl->tpl_vars['producto']->_loop = true;
?>
   <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
o
   <div class ="span12">
    
   </div>
    <div class="span2">
        <a href="index.php?modulo=producto&action=consultarDato&dato=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
&atributo=id class='name'">
            <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" width="120px" height="120px" /></a>
        <br>
            <span>$ <?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</span>
        <a href="index.php?modulo=producto&action=consultarDato&dato=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
&atributo=id">Ver</a>   
    </div>
    <?php } ?>
    
</div><?php }} ?>