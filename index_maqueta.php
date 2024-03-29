<!DOCTYPE>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tienda de Camisetas</title>
	<link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
	<div id="container">
	<!-- Cabecera -->
	<header id="header">
		<div id="logo">
			<img src="assets/img/camiseta.png" alt="Camiseta Logo">
			<a href="index.php">
				Tienda de camisetas
			</a>
		</div>
	</header>
	<!--MENU-->
	<nav id="menu">
		<ul>
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Categoria 1</a></li>
			<li><a href="#">Categotia 2</a></li>
			<li><a href="#">Categoria 3</a></li>
		</ul>
	</nav>

	<div id="content">

		<!--Barra Lateral-->
		<aside id="lateral">
			<div id="login" class="block_aside">
				<h3>Entrar a la web</h3>
				<form action="#" method="post">
					<label for="email">Email</label>
					<input type="email" name="email">
					<label for="password">Contraseña</label>
					<input type="password" name="password">
					<input type="submit" name="envio" value="Enviar">
				</form>
				<ul>
					<li><a href="#">Mis pedidos</a></li>
					<li><a href="#">Gestionar Pedidos</a></li>
					<li><a href="#">Gestionar Categorias</a></li>
				</ul>
			</div>
		</aside>

		<!--Contenido Central-->

		<div id="central">
			<h1>Productos Destacados</h1>
			<div class="product">
				<img src="assets/img/camiseta.png">
				<h2>Camiseta Azul Ancha</h2>
				<p>30 dolares</p>
				<a href="#" class="button">Comprar</a>
			</div>

			<div class="product">
				<img src="assets/img/camiseta.png">
				<h2>Camiseta Azul Ancha</h2>
				<p>30 dolares</p>
				<a href="#" class="button">Comprar</a>
			</div>

			<div class="product">
				<img src="assets/img/camiseta.png">
				<h2>Camiseta Azul Ancha</h2>
				<p>30 dolares</p>
				<a href="#" class="button">Comprar</a>
			</div>
		</div>

	</div>

	<!--Footer-->

	<footer id="footer">
		<p>Desarrollado por HectorMarroquin &copy; <?= date('Y') ?> </p>
	</footer>

	</div>
</body>

</html>