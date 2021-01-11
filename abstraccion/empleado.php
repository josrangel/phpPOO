<?php

#Clase abstracta. Aqui solo se declaran las funciones pero se puede o no especificar su comportamiento
abstract Class Empleado{
	
	abstract public function calcularSalario($numeroDias);
	//Como no lleva el cuerpo, se omiten las llaves de la funcion
}

?>