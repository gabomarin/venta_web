<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>TD_INFORMATICA | {$title}</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
		<!--<link rel="stylesheet" type="text/css" href="templates/style.css" />-->
		<!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	</head>

	<body>
		<div id="header">
			<a href="index.html" class="float"><img src="images/logo.jpg" alt="" width="281" height="73" /></a>
			
			<div class="topblock2">
				<img src="images/shopping.gif" alt="" width="24" height="24" class="shopping" />
				<p>
					Carro de compra
				</p>
				<p>
					<strong>{$numero}</strong><span> articulos</span>
				</p>
			</div>
			<ul id="menu-bar">
				<li class="active">
					<a href="index.php">Inicio</a>
				</li>
				<li>
					<a href="#">Productos</a>
					<ul>
						{foreach item=categoria from=$categorias}
						<li class="color">
							<a href="index.php?modulo=categoria&action=listar&id={$categoria.id}">{$categoria.nombre}</a>
						</li>
						{/foreach}
						
					</ul>
				</li>
				
				<li>
					<a href="#">Acerca de</a>
				</li>
				<li>
					<a href="#">Contactanos</a>
				</li>
				{$user}
			</ul>

		</div>

		<div id="container">
			<div id="center" class="column">
				<br />
				<div id="content">
					{$contenido}
					{foreach item=contenidoObj from=$contenidos}
					{$contenidoObj}
					{/foreach}
					
				</div>
			</div>
			<div id="left" class="column">
				<div class="block">
					<h1> Categorias</h1>
					<br />
					<ul id="navigation">
						{foreach item=categoria from=$categorias}
						<li class="color">
							<a href="index.php?modulo=categoria&action=listar&id={$categoria.id}">{$categoria.nombre}</a>
						</li>
						{/foreach}
						

					</ul>
				</div>
				
			</div>
			<div id="right" class="column">
				<br />
				<div class="rightblock">
					
					<div class="blocks">
						<!--<img src="images/top_bg.gif" alt="" width="218" height="12" />
						<form action="index.php?modulo=estandar&action=login" method="post">
							<p class="line">
								<span>Email:</span>
								<input type="text" id="mail" name="mail" required/>
							</p>
							<p class="line">
								<span>Password:</span>
								<input type="password" id="pass" name="pass" required/>
							</p>
							<p class="line center">
								<a href="registro.html" class="reg">Registrate</a> | <a href="#" class="reg">Olvidaste password?</a>
							</p>
							<p class="line center pad20">
								<button type="submit" />
								Acceder</button>
							</p>
						</form>
						<img src="images/bot_bg.gif" alt="" width="218" height="10" />
						<br />-->
						{$panelContent}
					</div>
					
					
					<div class="blocks">
						</br>
						<div id="news">
							
							<h2>Ultimos Productos</h2>
							<br>
							
							<p>
								{foreach item=ultimo from=$ultimos}
								<a href="index.php?modulo=producto&action=listar&id{$ultimo.id}">{$ultimo.nombre}</a>
								<img src= "{$ultimo.imagen}" height=64 width=64/>
								Precio: ${$ultimo.precio}
								
								</br>
								{/foreach}
							</p>

						</div>
						<br />
					</div>

					
				</div>
			</div>
		</div>

		<div id="footer">
			<a href="">Inicio</a> | <a href="">Nuevos Productos</a> | <a href="">Promociones</a> |
			   <a href="">FAQ</a> | <a href="">Contactanos</a> | <a href="" >Politicas de Privacidad</a> |
			    <a href="" >Terminos del servicio</a>
		</div>
	</body>
</html>
