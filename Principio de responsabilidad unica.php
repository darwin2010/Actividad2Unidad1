<?php

class coche{ //Clase coche

    public $marca; //Atributo publico

    public function getMarcaCoche(){ //Funcion para llamar la variable
        
        echo "la marca del coche es: " .$this->marca; //Salida de pantalla 
    }
   
}

$Coche = new coche(); //Instanciando un objeto
$Coche->marca = "Audi"; //Asignado valor al objeto
$Coche->getMarcaCoche(); //Manado la funcion

class cocheDB{ //Clase coche para operaciones con la base de datos


    public function guardarCocheDB(){   //funcion para guardar el coche en la base de datos
        
    }
    public function eliminarCocheDB(){   //funcion para eliminar el coche en la base de datos
        
    }
   
}

?>