<?php

    function conexion(){
        return $conexion = mysqli_connect("localhost", "root", "", "login_ro");
    }

?>