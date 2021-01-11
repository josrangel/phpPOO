<?php

Class Fallar{
	public function inverso($numero){
		if($numero==0){
			throw new Exception("0 no tiene inverso");//si pasa por aqui, se dispara una nueva Excepcion
		}
		return "Inverso: ". 1/$numero ."<br>";
	}
}

$fallar = new Fallar();
try{//Trata de ejecutar este bloquee
	$sinFallo = $fallar -> inverso(5);
	echo $sinFallo;
	$conFallo = $fallar -> inverso(0);
	echo $conFallo;
}catch(Exception $e){//si algo falla, se ejecutara este bloque
	echo "Error: ".$e->getMessage();
}finally{//falle o no, siempre se ejecuta este bloque
	echo "<br>Fin de la ejecucion";
}
?>