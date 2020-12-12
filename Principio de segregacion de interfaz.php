<?php

interface IAve{ //Interface Ave
    
    Public function comer(); //Metodo publico comer
};

interface IAveVoladora{ //Interface Ave Voladora
    
    Public function volar(); //Metodo publico volar
};

interface IAveNadadora{ //Interface Ave Nadadora
    
    Public function nadar(); //Metodo publico nadar
};



// clase Loro
class Loro implements IAve, IAveVoladora{ //Implementando las dos interfaces IAve y AveVoladora

    public $animal = "loro";

    public function getTipoAnimal() //Metodo que llama el atributo de la clase
    {
        return $this->animal;
    }

    Public function volar() { //Metodo del la interface IAveVoladora

        return "volar";
    }

    Public function comer() { //Metodo del la interface IAve
        
        return "comer";
    }

}

// clase Pinguino
class Pinguino implements IAve, IAveNadadora{ //Implementando las dos interfaces IAve y IAveNadadora

    public $animal = "pinguino";

    public function getTipoAnimal() //Metodo que llama el atributo de la clase
    {
        return $this->animal;
    }

    Public function nadar() { //Metodo del la interface IAveVoladora

        return "nadar";
    }

    Public function comer() { //Metodo del la interface IAve
        
        return "comer";
    }

}

$animal = new Loro; //Iteracion de nuevo objeto
echo "El Ave de tipo " .$animal->getTipoAnimal() ." tiene la capacidad de ".$animal->volar() ." y la habilidad de " .$animal->comer(); //Salida en pantalla
echo "<br>";
$animal = new Pinguino; //Iteracion de nuevo objeto
echo "El Ave de tipo " .$animal->getTipoAnimal() ." tiene la capacidad de ".$animal->nadar() ." y la habilidad de " .$animal->comer(); //Salida en pantalla
echo "<br>";


?>