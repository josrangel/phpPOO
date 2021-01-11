<?php

//Los metodos y atributos estaticos se pueden utilizar sin necesidad de crear un objeto, solo haciendo referencia a la clase
Class Gato{
	//Los metodos y atributos deben de ser publicos para poder ser utilizados fuera de la clase, sino pierde el sentido de que sean estaticos
	static public $nombre = "Mugritas";
	static public $edad = 5;
	static public $raza = "Bengali";

	static public function comer(){
		echo "comiendo... <br>";
	}

	static public function maullar(){
		return "Miauuuu <br>";
	}

	static function ronronear(){
		echo "rrrrrrr... <br>";
	}
}

#Creacion del la instancia
//para acceder a ellos se pone el nombre de la clase, seguido de dobles dos puntos (::) y la variable o funcion que se necesite
echo Gato :: $nombre . "<br>";
Gato :: $nombre = "No se :V";
echo Gato :: $nombre . "<br>";
echo Gato :: $edad. "<br>";
echo Gato :: $raza. "<br>";
Gato :: comer();
Gato :: ronronear();

?>