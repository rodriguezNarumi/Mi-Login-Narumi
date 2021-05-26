
<?php

  require_once "conexion.php";

  $conexion = conexion();

  $mi_query_de_busqueda = "SELECT * FROM estudiante";

  $rsultado_del_query = $conexion->query($mi_query_de_busqueda);

  $preconstruccion_de_tabla="";

  while($datos_de_tabla=$rsultado_del_query->fetch_assoc()){

    $preconstruccion_de_tabla = $preconstruccion_de_tabla.'
    <tr>
      <td>'.$datos_de_tabla['id_estudiante'].'</td>
      <td>'.$datos_de_tabla['nombre'].'</td>
      <td>'.$datos_de_tabla['paterno'].'</td>
      <td>'.$datos_de_tabla['materno'].'</td>
      <td>'.$datos_de_tabla['movil'].'</td>
      <td>'.$datos_de_tabla['dias'].'</td>
      <td>'.$datos_de_tabla['pago'].'</td>
      <td>
        <span 
          class="btn btn-warning" 
          data-toggle="modal" 
          data-target="#modal_update" 
          onclick="precarga_estudiante('.$datos_de_tabla['id_estudiante'].')"
        >
          <i class="fas fa-edit"></i>
        </span>
      </td>
      <td>
        <span 
          class="btn btn-primary" 
          onclick="eliminar_estudiante('.$datos_de_tabla['id_estudiante'].')"
        >
          <i class="fas fa-trash-alt"></i>
        </span>
      </td>
    <tr>';
  }

  $conexion->close();

  echo '
    <table class="table table stripped">
      <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Movil</th>
        <th>Dias</th>
        <th>Pago</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        '.$preconstruccion_de_tabla.'
      </tbody>
    </table>
  ';
?>