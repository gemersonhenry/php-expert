<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="viewport=width-device">
	<title>PROYECTO MVC</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	
	<header>
		<h1>LOGO</h1>
		<?php include('views/modules/navegacion.php') ?>
	</header>
	<section>
		<?php  
			$mvc = new ControllerMVC();
			$mvc->enlacesPaginasController();
		?>
	</section>
	<footer>
		<h4> @BZGemerson </h4>
	</footer>

</body>
</html>