<?php
include("bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");


$idemp = $_GET['id'];

$sentencia = "update empleados set activo=0 where id_empleado=$idemp";
$respuesta = $db->query($sentencia);

header("location:index.php")

?>