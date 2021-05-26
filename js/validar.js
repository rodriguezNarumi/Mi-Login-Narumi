function valida_texto(cadena){

  //console.log("en la funcion de valida texto: " + cadena)

  expresion1 = /[^\w\s]/gi;
  expresion2 = /[^A-Z/s]/gi;

  resultado1 = cadena.match(expresion1);
  resultado2 = cadena.match(expresion2);

  if(resultado1 != null || resultado2 != null){
    if(resultado1 !== null){
      resultado1 = "";
    }
    if(resultado2 == null){
      resultado2 = "";
    }
    swal('alerta en el nombre', 'los caracteres no son validos', 'warning');
    return false;
  }else{
    //swal('nombre', 'todo bien', 'success');
    valida_texto($('#registrar_nombre').val());
  }

}



$(document).ready(function(){

  $('#btn_registrar_nuevo_usuario').click(function(){

    if( $('#registrar_nombre').val() == "" ){
      swal('Upps', 'No has ingresado nombre', 'warning');
      return false;
    }else if($('#registrar_apellido').val() == ""){
      swal('Upps', 'No has ingresado paterno', 'warning');
      return false;
    }else if($('#resgistrar_usuario').val() == ""){
      swal('Upps', 'No has ingresado materno', 'warning');
      return false;
    }else if($('#registrar_password').val() == ""){
      swal('Upps', 'No has ingresado telefono', 'warning');
      return false;
    }else{
      swal('Yeeei', 'Todos los inputs tienen contenido', 'success');
      valida_texto($('#registrar_nombre').val());
     

    }

  });  

});
