<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

     <?php require_once 'app/config.php'?>

     <?php require_once 'app/dependencias.php' ?>
   
</head>
<body>

   <div class="container">
       <div class="row">
        <div class="col">

         

    <center>HEADER GLOBAL</center>

           </div>
       </div>
   </div>

<?php 
if(isset($_GET['vista_solicitada'])){

 $direccion_solicitada = explode('/', $_GET['vista_solicitada']);

switch ($direccion_solicitada[0]) {
  case 'login':{
    require_once 'view/login.php';
    break;
  }
  case 'registro':{
    require_once 'view/registro.php';
    break;
  }
    case 'inicio':{
    require_once 'view/inicio.php';
    break;
  }
   case 'horarios':{
    require_once 'php/horarios.php';
    break;
    }
   case 'profesores':{
    require_once 'php/profesores.php';
    break;
    }
   case 'material':{
    require_once 'php/material.php';
    break;
    }
   case 'precios':{
    require_once 'php/precios.php';
    break;
    
    }
   case 'requisitos':{
    require_once 'php/requisitos.php';
    break;
     }
   case 'crud':{
    require_once 'crud_natacion/index_crud.php';
    break;
  }
  default:{
    require_once 'view/404.php';
  }
       
}

}else{
  require_once 'view/login.php';

}

?>
 <div class="container">
       <div class="row">
        <div class="col">

         
<center>FOOTER GLOBAL</center>

         
           </div>
       </div>
   </div>
</body>
</html>