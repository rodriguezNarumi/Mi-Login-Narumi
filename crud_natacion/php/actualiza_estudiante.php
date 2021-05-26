<?php
//print_r($_POST);

require_once "conexion.php";
  
$conexion = conexion();

$datos_recibidos =  array(
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_id'])),
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_nombre'])),
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_paterno'])),
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_materno'])),
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_movil'])),
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_dias'])),
                                      $conexion->real_escape_string(htmlentities($_POST['actualiza_pago']))                           
                                    );

//print_r($datos_recibidos);

$query_update = "UPDATE estudiante 
              SET nombre=?, paterno=?, materno=?, movil=?, dias=?, pago=?
              WHERE id_estudiante=?";

$update_preparado = $conexion->prepare($query_update);

$update_preparado->bind_param('ssssssi', 
                                                  $datos_recibidos[1], 
                                                  $datos_recibidos[2], 
                                                  $datos_recibidos[3], 
                                                  $datos_recibidos[4], 
                                                  $datos_recibidos[5],
                                                  $datos_recibidos[6],
                                                  $datos_recibidos[0] 
                                                );

echo $update_preparado->execute();

$update_preparado->close();


?>
