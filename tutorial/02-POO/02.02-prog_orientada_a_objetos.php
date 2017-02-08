<?php  

/**
 * Crearemos algunas clases y aplicaremos los conceptos de POO
 */

// Instanciamos un nuevo objeto para el proceso de compra
$p = new ComprarAutomovil();

// Instanciamos varios autos para agregarlos a la lista
$a_01 = new Automovil("Nissan", "Modelo XXX");
$a_02 = new Automovil("Chevrolet", "Modelo YYY");
$a_03 = new Automovil("Toyota", "Modelo XXX");
$a_04 = new Automovil("Otro", "Modelo YYY");

// agregamos los autos a la lista de autos
$p->agregarAutoEnLista($a_01);
$p->agregarAutoEnLista($a_02);
$p->agregarAutoEnLista($a_03);
$p->agregarAutoEnLista($a_04);

$autos = array($a_01, $a_02, $a_03, $a_04);
$p->agregarAutosEnLista($autos);

// elegimos un auto
$p->elegirAuto($a_03);

// registramos el nombre del comprador
$p->setComprador("Gemerson Bendezu");

var_dump($p);

/**
* Clase ComprarAutomovil
*/
class ComprarAutomovil
{
	private $listaDeAutos = array();
	private $autoElegido;
	private $comprador;
	
	function __construct(){
	}

	public function agregarAutoEnLista($auto){
		array_push($this->listaDeAutos, $auto);
	}

	public function agregarAutosEnLista($autos){
		foreach ($autos as $auto) {
			array_push($this->listaDeAutos, $auto);
		}
	}

	public function getListaDeAutos(){
		return $this->listaDeAutos;
	}

	public function elegirAuto($auto){
		foreach ($this->listaDeAutos as $a) {
			if ($a->getMarca()==$auto->getMarca() && $a->getModelo()==$auto->getModelo()) {
				$this->autoElegido = $a;
			}
		}
	}

	public function getAutoElegido(){
		return $this->autoElegido;
	}

	public function setComprador($comprador){
		$this->comprador = $comprador;
	}

	public function getComprador(){
		return $this->comprador;
	}
}

/**
 * clase Automovil
 */
class Automovil
{
	private $marca;
	private $modelo;

	function __construct($marca, $modelo){
		$this->marca = $marca;
		$this->modelo = $modelo;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
}

?>