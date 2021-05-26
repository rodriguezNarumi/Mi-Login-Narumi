<?php

  session_start();

  if(isset($_SESSION['user'])){
    
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de registros</title>
  <!-- dependencias visuales -->
  <link rel="stylesheet" href="css/b4/bootstrap.css">
  <link rel="stylesheet" href="css/font_awesome/all.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- dependencias de funcionalidad -->
  <script src="js/jquery/jquery.js"></script>
  <script src="js/swal/swal.js"></script>
  <script src="js/font_awesome/all.js"></script>
  
  <script src="js/b4/bootstrap.js"></script>
  <script src="js/funciones.js"></script>
</head>
<body style= "background-image: url(../img/niño.jpg);">

  <!-- inicio: estructura basica b4 -->
  <div class="container">
    <div class="row">
      <div class="col">
 <h2><center>SISTEMA DE REGISTRO</center></h2>
             <div class="form-group d-flex justify-content-end">
                  <a class="badge badge-light" href="login">Cerrar sesion</a>
                  </div>
        <!-- inicio: construccion de la card -->
        <div class="card bg-light mb-3">
          <div class="card-header">
            <i class="fab fa-battle-net mr-2" style="font-size: 35;"></i> <strong>Registros</strong>
          </div>
          <div class="card-body">
            <!-- inicio: construccion del espacio para el boton de agregar con icono -->
            <div class="row">
              <div class="col">
                <div class="d-flex justify-content-end">
                <span class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal_insert"><!--Se agrega informacion del trigger propio del modal_insert-->
                  <i class="fas fa-plus"></i>
                  Registrarse
                </span>
                </div>
                <!-- agregamos un div para presentar el contenido de la tabla: lo importante de este es el ID -->
                <div id="datos_de_tabla" class="mt-3"></div>
              </div>
            </div>
          </div>
          <div class="card-footer lead text-muted text-right">
           
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- agregado de ventanas modales -->
  <?php
    require_once "view/modal_insert.php";
    require_once "view/modal_update.php";
  ?>
  <script>
    $(document).ready(function(){
      mostrar_datos();
    });
  </script>
</body>
</html>

<?php  

  }else{
    header("location: ../index.php");
  }

?>