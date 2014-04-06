<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head><title>Inicio Sesion</title></head>
  <body>
    <?php 
	  
	  if(isset($_POST['nombre']) && isset($_POST['password'])){
	      
	      if ($_POST['nombre']=='root' && $_POST['password']=='root'){
			$_SESSION['nombre']=$_POST['nombre'];
			echo "Bienvenido: " . $_POST['nombre'];
	      }
	      else {
			echo "Acceso Restringido";
	      }
	  } 
	  else{

	      if (isset($_SESSION['nombre'])){
			echo "Sesion Iniciada: ". $_SESSION['nombre'];
			echo "</br><a href='CerrarSesion.php'>Cerrar Sesion</a>";
	      }
	      else{
				echo "Acceso Restringido";      
	      }
	 }
	?>
	</br><a href="Sesion.php">Pagina principal</a>

  </body>
</html>