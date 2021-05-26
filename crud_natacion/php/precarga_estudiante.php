<?php

  require_once "conexion.php";

  $conexion = conexion();

  $id_recibido = $conexion->real_escape_string(htmlentities($_POST['id_estudiante']));

  $query_select_id = "SELECT id_estudiante, nombre, paterno, materno, movil, dias, pago FROM estudiante WHERE id_estudiante=?";

  $select_id_preparado = $conexion->prepare($query_select_id);

  $select_id_preparado->bind_param('i', $id_recibido);

  $select_id_preparado->execute();

  $extractor_datos_query = $select_id_preparado->get_result()->fetch_assoc();

  echo json_encode($extractor_datos_query);

  //$select_id_preparado->close();

?>