<?php 
include_once "Semaforo.php";

class semaforoSuelo extends Semaforo{
    private $luzSuelo;
    
    private function activarLuces(){
        $luzActiva = $this -> getColorLuz();
        if($luzActiva != "amarillo"){
            $this -> luzSuelo = $luzActiva;        
        }//cierre del if
    }//cierre de la funcion
    
    public function cambiarLuz(){
        parent :: cambiarLuz();
        $this -> activarLuces();
    }
    
    public function getLuzSuelo(){
        echo $this -> luzSuelo;
    }
}
?>