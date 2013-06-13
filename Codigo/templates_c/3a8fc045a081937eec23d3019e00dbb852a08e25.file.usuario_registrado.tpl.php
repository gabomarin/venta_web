<?php /* Smarty version Smarty-3.1.13, created on 2013-06-01 19:23:57
         compiled from "templates\usuario_registrado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3130051aa828d92c5f4-37694273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a8fc045a081937eec23d3019e00dbb852a08e25' => 
    array (
      0 => 'templates\\usuario_registrado.tpl',
      1 => 1370128797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3130051aa828d92c5f4-37694273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'registro' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51aa828d98d7c7_86492514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aa828d98d7c7_86492514')) {function content_51aa828d98d7c7_86492514($_smarty_tpl) {?><div class="well span7">
    <h2>
        <?php echo $_smarty_tpl->tpl_vars['registro']->value;?>

    </h2>
    
    <p class="hero-unit">
        <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
    
    </p>
    
    
    
</div>
<?php }} ?>