<?php  

class EnlacesPaginas{

	public function enlacesPaginasModel($enlacesModel){
		if ( $enlacesModel=="inicio" ||
			$enlacesModel=="nosotros" || 
			$enlacesModel=="servicios" || 
			$enlacesModel=="contactanos" ) 
		{
			$module = "views/modules/".$enlacesModel.".php";
		} else {
			$module = "views/modules/inicio.php";
		}
		return $module;
	}

}


?>