<?php 
include_once "Semaforo.php";

class semaforoContador extends Semaforo{
    private $segundos;
    
    public function getSegundos(){
        return $this -> segundos;
    }
    
    public function setSegundos($tiempo){
        $this -> segundos = $tiempo;
    }
}
?>