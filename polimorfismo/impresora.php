<?php

#Clase de se utilizara la dependencia, para el ejemplo no es necesario llevar mas codigo
Class Impresora{
	public function imprimir($cualquierObjeto){
		return $cualquierObjeto->imprime();
	}
}

require_once "informe.php";
require_once "curriculum.php";

$objetoImpresora = new Impresora();

$objetoInforme = new Informe();
echo $objetoImpresora -> imprimir($objetoInforme);


$objetoCurriculum = new Curriculum();
echo $objetoImpresora -> imprimir($objetoCurriculum);?>