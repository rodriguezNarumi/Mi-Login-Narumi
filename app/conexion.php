<?php
function conexion(){
	$conexion = new mysqli('127.0.0.1','root','','proyecto-final-web');
	if($conexion->connect_errno){
		echo 'error en la conexion : ' .$conexion->connect_errno;
	}
	$conexion->set_charset('utf8');
	return $conexion;
}
?>