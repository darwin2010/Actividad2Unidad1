<?php

// clase base abstracta
abstract class Coche {

    public $marca; //Atributo publico

    abstract public function precioMedioCoche(); //Metodo abstracto para precio medio del coche
    abstract public function numAsientos(); //Metodo abstracto para numero de asientos
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

    public function numAsientos() //Metodo que determina el valor de la funcion de la clase
    {
        return "5";
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

    public function numAsientos() //Metodo que determina el valor de la funcion de la clase
    {
        return "4";
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

    public function numAsientos() //Metodo que determina el valor de la funcion de la clase
    {
        return "5";
    }
}

// clase que extienden la clase Coche
class Ford extends Coche {

    public $marca = "Ford";

    public function getMarcaCoche() //Metodo que llama el atributo de la clase
    {
        return $this->marca;
    }

    public function precioMedioCoche()  //Metodo que determina el valor de la funcion de la clase
    {
        return "35000";
    }

    public function numAsientos() //Metodo que determina el valor de la funcion de la clase
    {
        return "8";
    }
}

$coche = new Renault; //Iteracion de nuevo objeto
echo "Coche de marca " .$coche->getMarcaCoche() ." de valor : ".$coche->precioMedioCoche() ." Con numero de asientos : " .$coche->numAsientos() ; //Salida en pantalla
echo "<br>";
$coche = new Audi; //Iteracion de nuevo objeto
echo "Coche de marca " .$coche->getMarcaCoche() ." de valor : ".$coche->precioMedioCoche() ." Con numero de asientos : " .$coche->numAsientos() ; //Salida en pantalla
echo "<br>";
$coche = new Mercedes; //Iteracion de nuevo objeto
echo "Coche de marca " .$coche->getMarcaCoche() ." de valor : ".$coche->precioMedioCoche() ." Con numero de asientos : " .$coche->numAsientos() ; //Salida en pantalla
echo "<br>";
$coche = new Ford; //Iteracion de nuevo objeto
echo "Coche de marca " .$coche->getMarcaCoche() ." de valor : ".$coche->precioMedioCoche() ." Con numero de asientos : " .$coche->numAsientos() ; //Salida en pantalla
echo "<br>";
?>