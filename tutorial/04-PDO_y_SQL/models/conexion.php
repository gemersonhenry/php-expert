<?php  

/**
* Clase que define la conexión a la base de datos
*/
class Conexion
{
	private $host = "localhost";
	private $db = "mydb";
	private $port = "";
	private $user = "root";
	private $pass = "";
	private $opciones = array(
	    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
	);

	public function getConexion(){

		try 
		{
			$link = new PDO("mysql:host=".$this->host.";dbname=".$this->db, 
							$this->user, 
							$this->pass,
							$this->opciones
						);

			return $link;	
		} 
		catch (PDOException $e) 
		{
			
		}

	}

}


?>