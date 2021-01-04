<?php

require_once "papa.php";

#Clase hija, la cual hereda los elementos del padre
Class hijo extends Papa{
	
	public function funcionProtegidoHijo(){
		$this -> funcionProtegido(); //hace referencia a la instancia
		parent :: funcionProtegido(); //hace referencia al padre
	}	
}

$hijo = new Hijo();
$hijo -> funcionPublica();
$hijo -> funcionProtegidoHijo();
?>