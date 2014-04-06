<?php 
session_start();
?>
<html>
<head><title>Iniciar Sesion</title></head>
  <body>

    <?php
      if (isset($_SESSION['nombre'])){
      echo "<p>Pagina Principal</p>";
        echo "<p><a href='CerrarSesion.php'>Cerrar Sesion</a></p>";
        echo "<p><a href='index.php'>Mi sesion</a></p>";

      }
      else{ 
       
     ?>
      <form action="index.php" method="POST">
      	<p> Usuario :</br><input type="text" name="nombre"></input></p>
      	<p>Password :</br><input type="text" name="password"></input></p>
      	<input type="submit" value="Inicio"></input>
      </from>
 
    <?php 
      } 
    ?>  
  </body>
</html>