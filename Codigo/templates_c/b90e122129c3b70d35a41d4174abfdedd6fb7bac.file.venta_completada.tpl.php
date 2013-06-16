<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 07:40:28
         compiled from "templates\venta_completada.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1000451bac8ec85b4f2-17490615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b90e122129c3b70d35a41d4174abfdedd6fb7bac' => 
    array (
      0 => 'templates\\venta_completada.tpl',
      1 => 1371186636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1000451bac8ec85b4f2-17490615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bandera' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bac8ec978087_44930736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bac8ec978087_44930736')) {function content_51bac8ec978087_44930736($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['bandera']->value==1){?>

<div class="well span7">
    <h2>
        Has realizado tu compra
    </h2>
    
    <p class="hero-unit lead">
        <small>
            Tu compra ha sido realizada con exito, en breve te llegara un  correo con los detalles de tu compra
            y tu numero de orden. Cualquier duda no dudes en ponerte en contacto haciendo click
            <a href="index.php?modulo=estandar&action=contacto"> aqui</a>.
        </small>
    </p>
</div>


<?php }elseif($_smarty_tpl->tpl_vars['bandera']->value==0){?>
<div class="well span7">
    <h2>
        Error al realizar la compra
    </h2>
    <hr>
    <p class="hero-unit lead">
        <small>
            Lo sentimos, sucedió un error al realizar la compra, intenta de nuevo.
        </small>
    </p>
</div>

<?php }elseif($_smarty_tpl->tpl_vars['bandera']->value==3){?>
<div class="well span7">
    <h2>
        Carro de compras Vacio
    </h2>
    <hr>
    <p class="hero-unit lead">
        <small>
            Tu carro de compras esta vacion, favor de agregar productos.
        </small>
    </p>
</div>

<?php }else{ ?>
<div class="well span7">
    <h2>
        No has iniciado sesion
    </h2>
    <hr>
    <p class="hero-unit lead">
        <small>
            Por favor inicia sesion para poder realizar tu compra.
        </small>
</div>
    

<?php }?>
<?php }} ?>