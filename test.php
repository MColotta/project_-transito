<?php 
include_once 'Semaforo.php';
include_once "semaforo_contador.php";

$nuevoSemaforo  = new Semaforo();
$segundoSemaforo = new semaforoContador();

echo $nuevoSemaforo -> ge22tEstadoFuncionamiento()."<br />";

$nuevoSemaforo -> setIdProveedor(21);
echo "ID: ".$nuevoSemaforo -> getIdProveedor()."<br />";

echo $nuevoSemaforo."<br />";

$nuevoSemaforo -> cambiarLuz();
echo $nuevoSemaforo -> getColorLuz()."<br />";

$segundoSemaforo -> setSegundos(25);
echo "Segundos en el contador: <strong>".$segundoSemaforo -> getSegundos()."</strong><br />";

$nuevoSemaforo -> setFechaInstalacion();
echo "Fecha de instalación: ".$nuevoSemaforo -> getFechaInstalacion();
?>