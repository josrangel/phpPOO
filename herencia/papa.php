<?php

#Clase padre, la que heredara los atributos a su hijo
Class Papa{
	private $_privado; //Los elementos privados, no podran usar ser usados en la clase hija
	protected $protegido;
	public $publico;

	private function funcionPrivada(){
		echo "privado<br>";
	}

	protected function funcionProtegido(){
		echo "protegido<br>";
	}

	public function funcionPublica(){
		echo "publico<br>";
	}
}

?>