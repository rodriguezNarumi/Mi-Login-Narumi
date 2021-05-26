<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
 
<?php require_once 'dependencias.php' ?>

</head>
<body id="fondo" 
  style="background-color: skyblue ">
<div class="container">
    <div class="row mt-3">
      <div class="col-sm-4"></div>
      <div class="col-sm-4 mt-3">
        <div>
          <h1 class="text-danger">Formulario de Registro</h1>
          <hr>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <form name="addForm" method="post" id="controlando_el_formulario" >
              <div class="text-danger">
                <label for="registrar_nombre">Nombre</label>
                <input type="text" class="form-control" id="registrar_nombre" placeholder="Ingresa tu nombre">
              </div>

              <div class="text-danger">
                <label for="registrar_apellido">Apellido</label>
                <input type="text" class="form-control" id="registrar_apellido" placeholder="Ingresa tu apellido">
              </div>

              <div class="text-danger">
                <label for="registrar_usuario">Usuario</label>
                <input type="text" class="form-control" id="registrar_usuario" placeholder="Ingresa tu usuario">
              </div>

              <div class="text-danger">
                <label for="registrar_password">Password</label>
                <input type="password" class="form-control" id="registrar_password" placeholder="Ingresa tu password">
              </div>
              <br>
        
              <div class="form-check d-flex justify-content-end">
                <span class="btn btn-danger" id="btn_registrar_nuevo_usuario">Registrar</span>

              </div>
              <div class="form-check d-flex justify-content-end mt-4">
                <a class="btn btn-danger" href="login">Regresar</a>
              </div>

            </form>
          </div>
        </div>
      </div>

      <div class="col-sm-4"></div>

    </div>
  </div>

</body>
</html>


 <script type="text/javascript">
  $(document).ready(function(){
    $("#btn_registrar_nuevo_usuario").click(function(){
      if($('#registrar_nombre').val() == "" ){
        Swal.fire({
          imageUrl: "img/tu.jpg",
          title: "Rayos..!!",
          text: "Falta que escribas el NOMBRE de tu cuenta",
          footer: "lo siento"
        });

        return false;
      }else if($('#registrar_apellido').val() == ""){
        Swal.fire({
          imageUrl: "img/tu.jpg",
          title: "Rayos..!!",
          text: "Falta que escribas el APELLIDO de tu cuenta",
          footer: "lo siento"
        });

        return false;
      }else if($('#registrar_usuario').val() == ""){
        Swal.fire({
          imageUrl: "img/tu.jpg",
          title: "Rayos..!!",
          text: "Falta que escribas el USUARIO de tu cuenta",
          footer: "lo siento"
        });

        return false;
      }else if($('#registrar_password').val() == ""){
        Swal.fire({
          imageUrl: "img/tu.jpg",
          title: "Rayos..!!",
          text: "Falta que escribas el PASSWORD de tu cuenta",
          footer: "lo siento"
        });
        return false;
      }
      informacion_recolectada = "nombre=" + $('#registrar_nombre').val() +
                                "&apellido=" + $('#registrar_apellido').val() + 
                                "&usuario=" + $('#registrar_usuario').val() + 
                                "&password=" + $('#registrar_password').val();
                                
      $.ajax({
        type: "POST",
        url: "php/control_registro.php",
        data: informacion_recolectada,
        success: function(r){
          if(r==1){
            $('#controlando_el_formulario')[0].reset();


            Swal.fire({
              imageUrl: "img/succes.png",
              title: "Perfecto !!!",
              text: "Se registro tu usuario con exito",
              footer: "En Hora buena"
            });

            return false;

          }else{

            Swal.fire({
              imageUrl: "img/error.png",
              title: "Woooo, Algo salió mal",
              text: "No se logró crear tu usuario",
              footer: "Lo Siento"
            });
            
            return false;
          }
        }
      });

    });
  });
</script>