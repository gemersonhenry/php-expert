<?php  

require_once('models/indexModel.php');
require_once('controllers/indexController.php');

$mvc = new ControllerMVC();

$mvc->index();

?>