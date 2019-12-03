<?php 
include_once 'Semaforo.php';
include_once "semaforoSuelo.php";

$nuevoSemaforo = new Semaforo();
$semaforoSuelo = new semaforoSuelo();

print_r($nuevoSemaforo);

$semaforoSuelo -> cambiarLuz();
echo "<br />".$semaforoSuelo -> getColorLuz()."<br />";
$semaforoSuelo -> cambiarLuz();
echo $semaforoSuelo -> getColorLuz()."<br />";
?>