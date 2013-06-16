<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 03:40:22
         compiled from "templates\detalle_carro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2800751bac8e672a266-23418199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13a70d0f03c5e0b42663313a2ea248ac0991f4a1' => 
    array (
      0 => 'templates\\detalle_carro.tpl',
      1 => 1371186642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2800751bac8e672a266-23418199',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bac8e67aeda9_85490276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bac8e67aeda9_85490276')) {function content_51bac8e67aeda9_85490276($_smarty_tpl) {?>
<link rel="stylesheet" href="simplecart/carro.css" type="text/css" media="screen" charset="utf-8" />
<div class="well span7">
		      <div >
		      <!--<img src="images/shopping.gif" alt="" width="24" height="24" class="shopping" />
		      <p>
			      Carro de compra
		      </p>
		      <p>
				
				<span class="simpleCart_quantity"></span> articulos - <span class="simpleCart_total"></span>
				</br>
			  <a class="btn btn-inverse" href="javascript:;" class="simpleCart_checkout">Comprar</a>
			     
		      </p>-->

				<h4>Mi carro</h4>
				<hr>
				
				
				<!--Add a Div with the class "simpleCart_items" to show your shopping cart area.-->
                
                    <div class="simpleCart_items"></div>
                </div>
				
				<span class="total">Total: <span class="simpleCart_total"></span> MXN</span>
				<!--Here's the Links to Checkout and Empty Cart-->
				<hr>
				
				 <a class="simpleCart_empty" href="javascript:;"><button class="btn btn-danger"><i class="icon-trash icon-white"></i> Vaciar Carro</button></a>
                 
                 <a class="simpleCart_checkout" href="javascript:;"><button class="btn btn-primary"><i class="icon-shopping-cart icon-white"></i> Comprar</button></a>
				<!--<a href="javascript:;" class="simpleCart_checkout"><button class="btn btn-info"><i class="icon-user icon-white"> Comprar</i></button></a>
				<!--<a href="#" class="simpleCart_checkout"><button class="btn btn-info pull-right">Comprar</button></a>-->
            
</div><?php }} ?>