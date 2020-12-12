<?php

// clase base abstracta
abstract class Coche {

    public $marca; //Atributo publico

    abstract public function precioMedioCoche(); //Metodo abstracto
}

// clase que extienden la clase Coche
class Renault extends Coche {

    public $marca = "Renault";

    public function getMarcaCoche() //Metodo que llama el atributo de la clase
    {
        return $this->marca;
    }

    public function precioMedioCoche() //Metodo que determina el valor de la funcion de la clase
    {
        return "18000";
    }
}

// clase que extienden la clase Coche
class Audi extends Coche {

    public $marca = "Audi";

    public function getMarcaCoche() //Metodo que llama el atributo de la clase
    {
        return $this->marca;
    }

    public function precioMedioCoche()  //Metodo que determina el valor de la funcion de la clase
    {
        return "25000";
    }
}

// clase que extienden la clase Coche
class Mercedes extends Coche {

    public $marca = "Mercedes";

    public function getMarcaCoche() //Metodo que llama el atributo de la clase
    {
        return $this->marca;
    }

    public function precioMedioCoche()  //Metodo que determina el valor de la funcion de la clase
    {
        return "28000";
    }
}

$coche = new Renault; //Iteracion de nuevo objeto
echo "Coche de marca " .$coche->getMarcaCoche() ." cuyo valor es de: ".$coche->precioMedioCoche(); //Salida en pantalla
echo "<br>";
$coche = new Audi; //Iteracion de nuevo objeto
echo "Coche de marca " .$coche->getMarcaCoche() ." cuyo valor es de: ".$coche->precioMedioCoche(); //Salida en pantalla
echo "<br>";
$coche = new Mercedes; //Iteracion de nuevo objeto
echo "Coche de marca " .$coche->getMarcaCoche() ." cuyo valor es de: ".$coche->precioMedioCoche(); //Salida en pantalla
echo "<br>";

?>