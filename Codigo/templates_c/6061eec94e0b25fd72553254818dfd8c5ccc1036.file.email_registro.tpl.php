<?php /* Smarty version Smarty-3.1.13, created on 2013-06-13 16:32:39
         compiled from "templates/email_registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72751471451ba2eb0e3c8b5-13688812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6061eec94e0b25fd72553254818dfd8c5ccc1036' => 
    array (
      0 => 'templates/email_registro.tpl',
      1 => 1371159123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72751471451ba2eb0e3c8b5-13688812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ba2eb0e82b19_61293202',
  'variables' => 
  array (
    'usuario_nombre' => 0,
    'usuario_mail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ba2eb0e82b19_61293202')) {function content_51ba2eb0e82b19_61293202($_smarty_tpl) {?>
<div style="background-color: #e4eac6; color: #000000; text-outline: 2px white; font-size: large; width: 650px; padding: 10px;">
    
    <a href="http://alanturing.cucei.udg.mx/cc409/virtualtd/" target="_blank"><img style= "width:98%; text-align: center;" src="http://alanturing.cucei.udg.mx/cc409/virtualtd/images/logo_mail.jpg"></a>
    <h2 style="font-weight: bolder;">
        Registro exitoso
    </h2>
    <hr>
    <p style="background-color: rgba(100, 100, 117, 0.3);
        border-radius: 10px;
        
        font-weight: bold;">
        <small>
            Gracias <b><?php echo $_smarty_tpl->tpl_vars['usuario_nombre']->value;?>
</b> por registrarte en <em><strong>TD-INFORMATICA</strong></em>,
			ahora mismo puedes iniciar sesion y comenzar a realizar compras haciendo click &nbsp;&nbsp;
            <span style="border-radius: 4px; background-color: #5B5B5B; color: #FFF; border: 1px solid black; padding: 5px;">
                <a style="text-decoration: none; size: 90%; color: #FFF;" href="http://alanturing.cucei.udg.mx/cc409/virtualtd/index.php?modulo=estandar&action=login">AQUI</a>
                <br>
                <br>
            </span>
            <div>Tu correo de acceso es "<?php echo $_smarty_tpl->tpl_vars['usuario_mail']->value;?>
"</div>
        </small>
    </p>
</div>
<?php }} ?>