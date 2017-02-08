<?php  

class ControllerMVC{

	# Llamada a la plantilla
	public function plantilla(){
		include "views/template.php";
	}

	# Interacción con el usuario
	public function enlacesPaginasController(){
		$enlacesController = isset($_GET["action"]) ? $_GET["action"]:"inicio";
		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
		include $respuesta;
	}
}



?>