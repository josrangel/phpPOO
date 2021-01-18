<?php

require_once "imprimible.php";

#Clase de la dependencia, donde se implementa la interfaz
Class Curriculum implements Imprimible{
	
	//forma de dependencia #1
	public function imprime(){
		return "Los datos del curriculum a imprimir...<br>";
	}
}

?>