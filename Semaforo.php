<?php 
class Semaforo {
    private $id;
    private $colores = ["rojo", "amarillo", "verde", "amarillo"];
    private $estadoFuncionamiento;
    private $idProveedor;
    private $fechaInstalacion;
    
    public function __construct(){
        $this -> estadoFuncionamiento = "funcionando";
        $this -> fechaInstalacion = date('d:m:y');
    }
    
    public function __toString(){
        return "el estado de funcionamiento es <strong>". $this -> getEstadoFuncionamiento()."</strong>";
    }
    
    public function getEstadoFuncionamiento(){
        return $this -> estadoFuncionamiento;
    }
    
    public function setEstadoFuncionamiento($nuevoEstado){
        $this -> estadoFuncionamiento = $nuevoEstado;
    }
    
    public function getIdProveedor(){
        return $this -> idProveedor;
    }
    
    public function setIdProveedor($nuevoId){
        $this -> idProveedor = $nuevoId;
    }
    
    public function cambiarLuz(){
        //probar un for para recorrer el arreglo y un if para determinar el tiempo en base al color
        $color = array_shift($this -> colores);
        array_push($this -> colores, $color);
    }
    
    public function getColorLuz(){
        return $this -> colores [0];
    }
    
    public function setFechaInstalacion(){
    }
    
    public function getFechaInstalacion(){
        return $this -> fechaInstalacion;
    }
}//class semaforo
?>