<?php 

  session_start();
  require_once "conexion.php";

  $objeto_conexion = conexion();

  $usuario_recibido = $_POST['usuario'];
  $password_recibido = sha1($_POST['password']);

  $query_de_busqueda = "SELECT * FROM usuarios WHERE usuario='$usuario_recibido' and password='$password_recibido'";

  $resultado_del_query= mysqli_query($objeto_conexion, $query_de_busqueda);

  if(mysqli_num_rows($resultado_del_query) > 0){
    $_SESSION['user']=$usuario_recibido;
    echo 1;
  }else{
    echo 0;
  }
  
?>