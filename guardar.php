<?php
include("conexion.php");

$proceso = $_POST['proceso'];
$llegada = $_POST['llegada'];
$rafaga = $_POST['rafaga'];
$demanda = $_POST['demanda'];

$query = "INSERT INTO fifo (proceso,llegada,rafaga,demanda) VALUES('$proceso','$llegada','$rafaga','$demanda')";
    
$resultado = $conexion->query($query);

if($resultado == 1){
    echo"Datos insertados";
    
    header("location:index.php");
}else{
    echo"Error al insertar datos";
}

?>