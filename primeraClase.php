<?php

//declaracion de la clase
Class Gato{
	public $nombre;
	private $_edad;
	protected $raza;

	//constructor
	public function __construct(){
		print "Se creo el objeto <br>";
	}

	public function comer(){
		echo "comiendo... <br>";
	}

	protected function maullar(){
		return "Miauuuu <br>";
	}

	private function ronronear(){
		echo "rrrrrrr... <br>";
	}
}

#Creacion del la instancia

$gato = new Gato();
$gato -> comer();
$gato -> nombre = "Mugritas";
echo "Nombre: " . $gato -> nombre;
?>