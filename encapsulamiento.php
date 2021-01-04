<?php

//declaracion de la clase
Class Gato{
	private $_nombre;
	private $_edad;
	private $_raza;

	//Asignacion de valores por el constructor
	public function __construct($nombre, $edad, $raza){
		$this -> _nombre = $nombre;
		$this -> _edad = $edad;
		$this -> _raza = $raza;
	}

	public function setNombre($nombre){
		$this -> _nombre = $nombre;
	}

	public function getNombre(){
		return $this -> _nombre;
	}

	public function setEdad($edad){
		$this -> _edad = $edad;
	}

	public function getEdad(){
		return $this -> _edad;
	}

	public function setRaza($raza){
		$this -> _raza = $raza;
	}

	public function getRaza(){
		return $this -> _raza;
	}
}

#Creacion del la instancia
$gato = new Gato("Mugritas",1,"bengala");
$gato -> setEdad(2);
echo $gato -> getRaza() . "<br/>";
echo $gato -> getNombre() . "<br/>";
echo $gato -> getEdad() . "<br/>";
?>