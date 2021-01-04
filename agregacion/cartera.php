<?php

require_once "billete.php";

#Clase donde se utiliza o realiza la agregacion
Class Cartera{
	
	//Se crea la variable donde se guardaran los objetos
	private $_arrayBilletes;

	//en el constructor se inicializa el array
	public function __construct(){
		$this->_arrayBilletes = new ArrayObject();
	}	

	public function agregarBillete(Billete $elBillete){
		$this->_arrayBilletes -> append($elBillete);
		echo "Se agrego el billete<br>";
	}
}

$cartera = new Cartera();
$billete1 = new Billete();
$cartera -> agregarBillete($billete1);
$billete2 = new Billete();
$cartera -> agregarBillete($billete2);
?>