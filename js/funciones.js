function mostrar_datos(){
  $.ajax({
    url:'php/mostrar_datos.php',
    success: function(r){
      $('#datos_de_tabla').html(r);
    }
  });
}
function eliminar_estudiante(id_estudiante){
  swal({
    title: "Borrar a este estudiante?",
    text: "Una vez que lo elimines, No se podrá recuperar la información del estudiante",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      //alert(id_estudiante);
      $.ajax({
        type: 'POST',
        data: 'id_estudiante=' + id_estudiante,
        url: 'php/elimina_estudiante.php',
        success: function(r){
          console.log(r);
          if(r==1){
            mostrar_datos();
            swal("Perfecto", "El estudiante ha sido eliminado permanentemente", "success");
          }else{
            swal( "No se logro eliminar al estudiante", "error");
          }
        }
      });
    }
  });
}
function crear_estudiante(){

  //Validacion de campos vacios
  if($('#crear_nombre').val() == ""){
    swal("Agrega el 'nombre' del estudiante por favor");
    return false;
  }else if($('#crear_paterno').val() == ""){
    swal("Agrega el 'apellido paterno' del estudiante por favor");
    return false;
  }else if($('#crear_materno').val() == ""){
    swal("Agrega el 'apellido materno' del estudiante por favor");
    return false;
  }else if($('#crear_movil').val() == ""){
    swal("Agrega el 'Te. movil' del estudiante por favor");
    return false;
  }

  /*
  //lo construi para jalar dato a dato y ver que ya funcionaba mi envio de datos del ajax
  //porque no me jalaba el serialize
  colector_de_informacion = "crear_nombre=" + $('#crear_nombre').val() +
                                          "&crear_paterno=" + $('#crear_paterno').val() + 
                                          "&crear_materno=" + $('#crear_materno').val() +
                                          "&crear_movil=" + $('#crear_movil').val();
                                          */

  $.ajax({
    type: 'POST',
    data: $('#formulario_crear_estudiante').serialize(),/*el serialize funciona SOLO SI cada input tiene el atributo NAME*/ 
    //lo habia construido para revisar xq fallaba el serialize
    /*data: colector_de_informacion,*/
    url:'php/crear_estudiante.php',
    success: function(r){
      //funciona solo para revisar que el post esta trabajando bien (requiere del otro lado print_r)
      //console.log(r);
      if(r==1){
        $('#formulario_crear_estudiante')[0].reset();//Limpia las cajas para evitar errores
        mostrar_datos(); //recarga la tabla por nosotros
        swal("Perfecto", "Se agregó un nuevo estudiante!", "success");
      }else{
        swal("Upps", "Error al intentar crear al estudiante", "error");
      }
    }
  });
}
function precarga_estudiante(id_estudiante){
  $.ajax({
    type: 'POST',
    data:"id_estudiante=" + id_estudiante,
    url: 'php/precarga_estudiante.php',
    success: function(r){

      //convertimos r a un objeto json valido
      datos_precarga = jQuery.parseJSON(r);

      $('#actualiza_id').val(datos_precarga['id_estudiante']);
      $('#actualiza_nombre').val(datos_precarga['nombre']);
      $('#actualiza_paterno').val(datos_precarga['paterno']);
      $('#actualiza_materno').val(datos_precarga['materno']);
      $('#actualiza_movil').val(datos_precarga['movil']);

    }
  });
}

function actualiza_estudiante(){

  if($('#actualiza_nombre').val() == ""){
    swal("Agrega el 'nombre' del estudiante por favor");
    return false;
  }else if($('#actualiza_paterno').val()==""){
    swal("Agrega el 'Ap. Paterno' del estudiante por favor");
    return false;
  }else if ($('#actualiza_materno').val()==""){
    swal("Agrega el 'Ap. Materno' del estudiante por favor");
    return false;
  }else if($('#actualiza_movil').val()==""){
    swal("Agrega el 'movil' del estudiante por favor");
    return false;
  }

  //alert($('#formulario_actualiza_estudiante').serialize());
  $.ajax({
    type: 'POST',
    data: $('#formulario_actualiza_estudiante').serialize(),
    url:'php/actualiza_estudiante.php',
    success: function(r){
      //console.log(r);
      if(r==1){
        mostrar_datos();
        swal("Perfecto", "Se actualizó la información estudiante!", "success");
      }else{
        swal("Upps", "Error al intentar actualizar la información del estudiante", "error");
      }
    }
  });

}