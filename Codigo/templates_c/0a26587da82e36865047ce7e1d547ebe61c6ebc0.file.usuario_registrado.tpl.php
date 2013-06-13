<?php /* Smarty version Smarty-3.1.13, created on 2013-06-12 21:25:32
         compiled from "templates/usuario_registrado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127476348851aaa3b5b30659-98879706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a26587da82e36865047ce7e1d547ebe61c6ebc0' => 
    array (
      0 => 'templates/usuario_registrado.tpl',
      1 => 1371066910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127476348851aaa3b5b30659-98879706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51aaa3b5b7d944_72030340',
  'variables' => 
  array (
    'registro' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aaa3b5b7d944_72030340')) {function content_51aaa3b5b7d944_72030340($_smarty_tpl) {?><div class="well span7">
    <h2>
        <?php echo $_smarty_tpl->tpl_vars['registro']->value;?>

    </h2>
    
    <p class="hero-unit lead">
        <small>
        <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

        </small>
    </p>
    
    
    
</div>
<?php }} ?>