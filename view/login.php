<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Session</title>
  <br>
  <CENTER><H3><B>Iniciar Session</B></H3></CENTER> 
  <CENTER><H4><B>Ingresa Tus Datos</B></H4></CENTER> 
  <link rel="stylesheet" href="css/bootstrap4/bootstrap.css">
  <link rel="stylesheet" href="css/sweetalert2/sweetalert2.min.css">
</head>
<body id="fondo" 
  style="background-image: url(img/fondo.jpg);">

    <div class="container">
      <div class="row mt-5">
      <div class="col-sm-4"></div>
        <div class="col-sm-4  mt-5">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/summer.jpg" alt="Card image cap">
            <div class="card-body">
              <form>
                <div class="form-group d-flex justify-content-end">
                  <a class="badge badge-light" href="registro">Registrarse</a>
                </div>
                <div class="form-group">
                  <label for="mi_usuario">Usuario</label>
                  <input type="text" class="form-control" id="mi_usuario" placeholder="Ingresa tu usuario">
                </div>
                <div class="form-group">
                  <label for="mi_password">Password</label>
                  <input type="password" class="form-control" id="mi_password" placeholder="Password">
                </div>
                <div class="form-check d-flex justify-content-end">
                  <!-- <button type="submit" class="btn btn-dark">Entrar</button> -->
                  <span class="btn btn-primary" id="btn_entrar_al_sistema">Entrar</span>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

    <script src="js/jquery_3.4.1/jquery.js"></script>
    <script src="js/bootstrap4/bootstrap.js"></script>
    <script src="js/sweet_alert2/sweetalert2.all.min.js"></script>
  </body>
  </html>


<script>

  $(document).ready(function(){

    //cadena = $('#mi_usuario').val();
  
    //alert(cadena);

    cadena = " Usuario ";

    $('#mi_usuario').val(cadena);

    $('#btn_entrar_al_sistema').click(function(){

      if($('#mi_usuario').val() == ""){
        Swal.fire({
          
          title: "lo siento",
          text: "Ingresa tu -> USUARIO <- ",
          
        });
        return false;
      }else if($('#mi_password').val() == ""){
        Swal.fire({
       
          title: "Lo siento",
          text: "Ingresa tu -> PASSWORD <-  ",
          
        });
        return false;
      }

      recolector_de_login = "usuario=" + $('#mi_usuario').val() + "&password=" + $('#mi_password').val();

      $.ajax({
        type: "POST",
        url: "php/control_login.php",
        data: recolector_de_login,
        success: function(r){
          if(r==1){
            window.location="inicio";
          }else{
            Swal.fire({
              
              title: "Lo siento",
              text: "Usuario o Contraseña Incorrectos, intentalo nuevamente",
              
            });
            return false;
          }
        }
      });

    });
  });

</script>
