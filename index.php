<!doctype html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>yeah</title>
  </head>
  <body>
    <div class="container">
      <br>
      <br>
      <br>
      <form action="guardar.php" method ="POST">
      <input type="text" name="proceso"  placeholder="Proceso" required>
      <input type="text" name="llegada"  placeholder="Llegada" required>
      <input type="text" name="rafaga"  placeholder="Rafaga" required>
      <input type="text" name="demanda"  placeholder="Demanda" required>
      <input type="submit" name="ingresa" value="Ingresar">
              
    </form>
    
    <br>
      <table border="5">
    <tr>
      <td>Proceso</td>
      <td>Llegada</td>
      <td>Rafaga</td>
      <td>Demanda</td>
    </tr>
    <?php
    include ('conexion.php');
      $sql="SELECT * FROM fifo";
      $todo=mysqli_query($conexion,$sql);

      while ($mostrar=mysqli_fetch_array($todo)) {
          ?>
          <tr>
          <td><?php echo $mostrar['proceso'] ?>  </td>
          <td><?php echo $mostrar['llegada'] ?>  </td>
          <td><?php echo $mostrar['rafaga'] ?>  </td>
          <td><?php echo $mostrar['demanda'] ?>  </td>
          </tr>
    <?php
      }
     ?>
</table>
<br>
<br>
<div class="container">

<form action="">
  <table border="2">
  <tr>
  <td>
   <input type="submit" name="ingresa" value="Fifo"> 

<br>
<br>
<table border="5">
  <tr>
      <td>Proceso</td>
      <td>Llegada</td>
      <td>Rafaga</td>
      <td>Demanda</td>
    </tr>
   <?php
    include ('conexion.php');
      $sql="SELECT  * FROM FIFO
ORDER BY llegada + 0 ";
      $todo=mysqli_query($conexion,$sql);

      while ($mostrar=mysqli_fetch_array($todo)) {
          ?>
          <tr>
          <td><?php echo $mostrar['proceso'] ?>  </td>
          <td><?php echo $mostrar['llegada'] ?>  </td>
          <td><?php echo $mostrar['rafaga'] ?>  </td>
          <td><?php echo $mostrar['demanda'] ?>  </td>
          </tr>
    <?php
      }
     ?>

</table>
</td>

  <td>
   <input type="submit" name="ingresa" value="Fifo"> 

<br>
<br>
<table border="5">
  <tr>
      <td>Proceso</td>
      <td>Llegada</td>
      <td>Rafaga</td>
      <td>Demanda</td>
    </tr>
   <?php
    include ('conexion.php');
      $sql="SELECT  * FROM FIFO ORDER BY rafaga desc";
      $todo=mysqli_query($conexion,$sql);

      while ($mostrar=mysqli_fetch_array($todo)) {
          ?>
          <tr>
          <td><?php echo $mostrar['proceso'] ?>  </td>
          <td><?php echo $mostrar['llegada'] ?>  </td>
          <td><?php echo $mostrar['rafaga'] ?>  </td>
          <td><?php echo $mostrar['demanda'] ?>  </td>
          </tr>
    <?php
      }
     ?>

</table>
</td>

</tr>
</table>
</form>

</div>
    </div>
    
    
    
    <div class="container">
        <br>
         <form action="reiniciar.php" method ="POST">
          <input type="submit" name="ingresa" value="Reiniciar">
        
    </div>
    
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap.min.js"></script>
  </body>
</html>