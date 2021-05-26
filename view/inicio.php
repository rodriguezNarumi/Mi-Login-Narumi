 <?php

  session_start();

  if(isset($_SESSION['user'])){
    
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inicio</title>
  
  <CENTER><H3><B>INFORMACION INPOTANTE</B></H3></CENTER> 
  <CENTER><H3><B>"ALBERCA SAN FRANSISCO"</B></H3></CENTER>
  <link rel="stylesheet" href="css/b4/bootstrap.css">
  <link rel="stylesheet" href="css/font_awesome/all.css">
  <link rel="stylesheet" href="css/style.css">
 
  <script src="js/jquery/jquery.js"></script>
  <script src="js/swal/swal.js"></script>
  <script src="js/font_awesome/all.js"></script>
  
  <script src="js/b4/bootstrap.js"></script>
  <script src="js/funciones.js"></script>

  
</head>
<body id="fondo" 
  style="background-image: url(img/pajaro.gif);">

  <div class="container">
    <div class="row">
      <div class="col">

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/02.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>"NIVEL BASICO"</h3>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/largo.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>"NIVEL INTERMEDIO"</h3>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/largon.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>"NIVEL AVANSADO"</h3>
       
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Sigiente</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Atras</span>
  </a>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SWING</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="inicio"> Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="horarios">Horarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profesores">profesores</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ver Mas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="requisitos">Requisitos de Inscripcion</a>
          <a class="dropdown-item" href="material">Material Obligatorio</a>
          <a class="dropdown-item" href="precios">Presios</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


<br>      
           <div class="card" style="width: 15rem; float: center; padding: 10px; margin: 40px">
           <img src="img/03.jpg" class="card-img-top" alt="...">
             <div class="card-body">
             <h5 class="card-title">"Dar clik para ingresar"</h5>
             <p class="card-text">¿ Deseas Acceder al sistema de registro ?</p>
           <center><a href="crud" class="btn btn-primary">Si</a>
           <a href="login" class="btn btn-primary">No</a></div></div></center>
            
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</body>
</html>

<?php  

  }else{
    header("location:../index.php");
  }

?>