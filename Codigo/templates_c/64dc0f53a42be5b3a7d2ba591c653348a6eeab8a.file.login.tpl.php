<?php /* Smarty version Smarty-3.1.13, created on 2013-06-14 01:39:16
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1035151b28e7224efe2-56710382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0f53a42be5b3a7d2ba591c653348a6eeab8a' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1371186646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1035151b28e7224efe2-56710382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b28e722f9aa7_41656175',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b28e722f9aa7_41656175')) {function content_51b28e722f9aa7_41656175($_smarty_tpl) {?><head>
  <style>
    .tam{
      width: 600px;
      height: 60px
    }
    .prueba{
      display:inline;
      float:left;
    }
  </style>
  <script type="text/javascript" src="bootstrap/js/validaLogin.js"></script>
  </head>
<body>
	<div class="well span7">
		 <div class="container span4 offset3">
	    <div class="content">
	      <div class="row">
	        <div class="login-form">
	          <h1 style="height: 60px">Login</h1>
	          <form action="index.php?modulo=estandar&action=login" method="POST" id="registrar"  name="registrar">
	            <fieldset>
		      <div class="tam">
			<div class="prueba" id="contenedorMail">
			  <input id="mail" class="input-large" name="mail" type="email" placeholder="Email" required="required" autocomplete="on" autofocus onkeypress="mandar(event);">
			</div>
		    </div>
			<div class="tam">
			  <div class="prueba" id="contenedorPass">
			  <input id="pass" class="input-large" name="pass" type="password" placeholder="Pass" required="required" onkeypress="mandar(event);">
			
			  </div>
		    </div>
			<div class="span8">
			  <button class="btn btn-primary prueba" type="button" onclick="envia()">Sign in</button>
			</div>
		      <?php if ($_smarty_tpl->tpl_vars['error']->value!=''){?>
			<div class="tam" style="margin-top: 10%;">
			<div class="prueba alert alert-error">
			
			  <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

			  </div>
			</div>
			<?php }?>
	            </fieldset>
	          </form>
	        </div>
	      </div>
	    </div>
	  </div> <!-- /container -->
	</div>
 
</body>
</html><?php }} ?>