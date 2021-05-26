<?php
    //Solo lo utilizamos para verificar que todo va bien (requiere del otro lado un console.log(r))
    //print_r($_POST);

  require_once "conexion.php";
  
  $conexion = conexion();

/**
 * real escape string -> indica que escaparemos caracteres string atipicos
 * htmlentities -> hace lo mismo para cualquier posible control html que coincida con unc aracter atipico
 */
  $datos_recibidos =  array(
                                        $conexion->real_escape_string(htmlentities($_POST['crear_nombre'])),
                                        $conexion->real_escape_string(htmlentities($_POST['crear_paterno'])),
                                        $conexion->real_escape_string(htmlentities($_POST['crear_materno'])),
                                        $conexion->real_escape_string(htmlentities($_POST['crear_movil'])),
                                         $conexion->real_escape_string(htmlentities($_POST['crear_dias'])),                            
                                        $conexion->real_escape_string(htmlentities($_POST['crear_pago']))
                                      );
  
  
  
  /**
   * Creamos el query sin valores, en su lugar por cada valor se escribe un  ?
   */
  $query_insert = "INSERT INTO estudiante(nombre, paterno, materno, movil, dias, pago) values(?, ?, ?, ?, ?, ?)";

  /**
   * Se prepara el query para que este no sufra de inyacciones SQL
   */
  $insert_preparado = $conexion->prepare($query_insert);

  /**
   * Se pasan parametros de manera segura al query preparado gracias a bind params
   *   - este requiere primero una cadena con la inicial del tipo de dato a usar
   *     - s - string
   *     - d - double
   *     - i  - entero
   *   - una inicial por cada argumento a pasar
   *   - despues de este se pasa uno a uno los argumentos con los valores del query para lograr el insert
   *   -  estos valores se acomodaran en los ? por lo que el orden y la cantidad son muy importantes 
   */
  $insert_preparado->bind_param('ssssss', $datos_recibidos[0], $datos_recibidos[1], $datos_recibidos[2], $datos_recibidos[3], $datos_recibidos[4], $datos_recibidos[5] );

  echo $insert_preparado->execute();

  $insert_preparado->close();

?>