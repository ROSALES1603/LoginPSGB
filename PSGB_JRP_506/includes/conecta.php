<?php
$mensaje = "";
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "informatica";
$mysqli = mysqli_connect($servidor,$usuario,$password,$bd);
if ($mysqli->connect_error) {
  die('Error al conectar la base de datos'.$mysqli->connect_error);
}
else {
  $mensaje.="<div class='alert-succes alert-dismissible fade show' role= 'alert'>
          <strong>Genial!</strong> La conexion a la base de datos es correcta.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
}
 ?>
