<?php  

/**
* CONTROLLER principal
*/
class ControllerMVC {

	public function index(){

		include('views/template.php');

	}

	public function enlacesPaginasController(){

		$enlaceController = isset($_GET['action']) ? $_GET['action']:'inicio';
		$urlEnlaceController = EnlacesPaginasModel::getUrlModel($enlaceController);
		include($urlEnlaceController);

	}

	public function agregarUsuarioController(){

		$data = array();

	}

}

?>