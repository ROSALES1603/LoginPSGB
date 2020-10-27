<?php
  session_start();
  include '../includes/conecta.php';
  $usuario = $_POST['User'];
  $password = md5($_POST['Password']);
  //consulta para ingresar al sisitema y determinar la variable de sesion
  $q = "SELECT * FROM alumnos WHERE Usuario = '$usuario' and Password = '$password'";
  if ($resultado = $mysqli->query($q)) {
    while ($row = $resultado->fetch_array()){
      $userok = $row['Usuario'];
      $passwordok = $row['Password'];
    }
    $resultado->close();
  }
  $mysqli->close();
  if (isset($usuario)&& isset($password)) {
    if ($usuario == $userok && $password == $passwordok) {
      $_SESSION['login']= TRUE;
      $_SESSION['Usuario']= $usuario;
      header("location:../principal.php");
        }
        else {
          header("location:../index.php");
        }
      }
      else {
        header("location:../index.php");
      }
 ?>
