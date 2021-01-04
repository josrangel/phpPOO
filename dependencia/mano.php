<?php

require_once "guante.php";

#Clase donde se utiliza o realiza la dependencia
Class Mano{
	
	//forma de dependencia #1
	public function crearGuante(){
		$objetoGuante = new Guante();
		echo "Se crea Guante #1<br>";
		//Aqui ya se puede utilizar el $objetoGuante
	}

	//forma de dependencia #2
	public function obtenerGuante($algunGuante){
		echo "Se crea Guante #2<br>";
		//Aqui ya se puede utilizar el objeto $algunGuante
	}	
}

//forma de dependencia #1
$mano = new Mano();
$mano -> crearGuante();


//forma de dependencia #2
$mano = new Mano();
$guante = new Guante();
$mano -> obtenerGuante($guante);

?>