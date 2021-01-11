<?php

#Los metodos magicos siempre empiezan con doble guion bajo(__). Algunos de ellos se muestran a continuacion
Class Persona{

	private $_nombre;

	#se ejecuta cuando se crea la instancia
	public function __construct(){
		echo "Estoy vivo :V <br>";
	}

	#se ejecuta cuando se asigna un valor a una propiedad privada
	public function __set($name, $value){
        echo "Estableciendo '$name' a '$value'<br>";
        $this->$name = $value;
    }

    #se ejecuta cuando se recupera un valor de una propiedad privada
    public function __get($name){
        //print "Consultando '$name'<br>";
        return $this->$name;
    }

	#se ejecuta cuando se clona el objeto
	public function __clone(){
		echo "Me clonaron :0 <br>";
	}

	#se ejecuta cuando se trata como un string al objeto (como cuando se manda a imprimir)
	public function __toString(){
		return "Persona: ...Estructura del objeto... <br>";
	}

	#se ejecuta cuando se verifica si existe o no un valor en el objeto, por lo regular solo devuelve un true o false
	public function __isset($name){
		echo "Comprobando... <br>";
		return isset($this->$name);
	}

	#se ejecuta cuando se destruye la instancia
	public function __destruct(){
		echo "Me muero :'V <br>";
	}
}


$persona = new Persona();
$persona -> nombre = "pp";
$persona2 = clone($persona);
echo $persona2 -> nombre . "<br>";
echo $persona;
unset($persona);
echo isset($persona2 ->nombre);

?>