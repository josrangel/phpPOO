<?php

require_once "queso.php";

#Clase donde se utiliza o realiza la asociacion
Class Quesadilla{
	
	//Se crea la variable donde se guardara el objeto
	private $_objetoQueso;

	//en el constructor se pasa como parametro el objeto que se utilizara para la asociacion
	public function __construct(Queso $unQueso){
		$this->_objetoQueso = $unQueso;
		//ya se puede utilizar en cualquier parte de la clase el objeto
	}	
}

$queso = new Queso();
$quesadilla = new Quesadilla($queso);
?>