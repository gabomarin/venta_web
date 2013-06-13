<?php /* Smarty version Smarty-3.1.13, created on 2013-06-12 22:20:56
         compiled from "templates/detalle_carro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186137982051b56ee95fdb14-05201442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c81f533982a6fc68135bfef0e7993b9e050da35d' => 
    array (
      0 => 'templates/detalle_carro.tpl',
      1 => 1371066909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186137982051b56ee95fdb14-05201442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b56ee9639fa3_13276393',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b56ee9639fa3_13276393')) {function content_51b56ee9639fa3_13276393($_smarty_tpl) {?>
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