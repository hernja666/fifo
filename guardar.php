<?php
include 'conexion.php';

$proceso=$_POST['proceso'];
$llegada=$_POST['llegada'];
$rafaga=$_POST['rafaga'];
$demanda=$_POST['demanda'];
$ins = $con -> query("INSERT INTO fifo (id,proceso,llegada,rafaga,demanda) VALUES ('','$proceso','$llegada','$rafaga',$demanda)");
if ($ins == 1){
  header("location:index.php");

}
 ?>
