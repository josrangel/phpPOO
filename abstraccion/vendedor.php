<?php

require_once "empleado.php";

#Clase hija, donde heredamos la clase abstracta
Class Vendedor extends Empleado{
	public function calcularSalario($numeroDias){
		return "Salario : " . $numeroDias * 60.00;
	}
}

$vendedor = new Vendedor();
echo $vendedor -> calcularSalario(7);
?>