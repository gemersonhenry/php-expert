<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TEMPLATE</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<header>
		LOGO DE LA EMPRESA
		<?php include('views/modules/navegacion.php') ?>
	</header>
	<section>
		<?php 
			$mvc = new ControllerMVC();
			$mvc->enlacesPaginasController(); 
		?>
	</section>
	<footer>
		@BZGemerson - Gemerson H. Bendezú Zavaleta
	</footer>

</body>
</html>