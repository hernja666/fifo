 <?php

//Ejemplo curso PHP aprenderaprogramar.com

$link = mysqli_connect("localhost", "root", "tlahuitoltepec");

mysqli_select_db($link, "fif");

mysqli_query($link, "TRUNCATE TABLE fifo");

mysqli_close($link);

// Cerramos la conexion con la base de datos

echo 'Se ha ejecutado la consulta TRUNCATE';

header("location:index.php");
?>