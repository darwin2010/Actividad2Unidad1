<?php

interface Conexion { //Interface llamada conexion

    public function getDatos(); //metodo publico de la interface
    public function setDatos(); //metodo publico de la interface

}

class AccesoADatos {

    private $conexion = "Conexion"; //Atributo privado

    Public function AccesoADatos(Conexion $conexion){ //Metodo publico
        
        $this->Conexion =$conexion;
    }

    Public function getDatos(){
        
        echo $this->conexion; //Salida de pantalla
    }
}

class DatabaseService implements Conexion { //Clase DatabaseService  con interface conexion

    public function getDatos(){ //metodo de la interface conexion

    }
 
    public function setDatos(){ //metodo de la interface conexion

    }
}

class APIService implements Conexion{ //Clase APIService con interface conexion

    public function getDatos(){ //metodo de la interface conexion

    }

    public function setDatos(){ //metodo de la interface conexion

    }
}


?>