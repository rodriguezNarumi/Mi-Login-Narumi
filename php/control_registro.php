<?php

    require_once "conexion.php";

    $objeto_para_usar_conexion = conexion();

    /**
     * 
     *       VISTA    ------     Controlador      ------     modelo(DB)
     * 
     */

    $nombre_recibido = $_POST['nombre'];
    $apellido_recibido = $_POST['apellido'];
    $usuario_recibido = $_POST['usuario'];
    $password_recibido = sha1($_POST['password']);


    $query_insert_usuario = "insert into usuarios(nombre, apellido, usuario, password) 
                                            values('$nombre_recibido', '$apellido_recibido', '$usuario_recibido', '$password_recibido')";

    echo $resultado_de_la_ejecucion_del_query = mysqli_query($objeto_para_usar_conexion, $query_insert_usuario);


?>