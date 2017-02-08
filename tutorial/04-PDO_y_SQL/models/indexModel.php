<?php  

class EnlacesPaginasModel{

	public function getUrlModel($enlaceModel){

		if ( $enlaceModel=="inicio" || 
			$enlaceModel=="nosotros" || 
			$enlaceModel=="servicios" || 
			$enlaceModel=="contactanos" ) 
		{
			return "views/modules/".$enlaceModel.".php";
		} 
		else 
		{
			return "views/modules/inicio.php";
		}

	}

}

?>