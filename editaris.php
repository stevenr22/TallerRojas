<?php
include("bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");


$idemp = $_POST['idregistro'];

//NO ME SALE AUN
$rif = $_POST['rifpersonal'];
$ced = $_POST['cedula'];
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$dir = $_POST['direccion'];
$tel_movil = $_POST['tmovil']; //celular
$tel_fijo = $_POST['telefono']; //telefono
$n_contact = $_POST['ncontacto'];
$f_ingre = $_POST['fingreso'];
$f_culmi = $_POST['fculm'];
$sueldo = $_POST['sueldo'];
$naci = $_POST['nacionalidad'];
$tienda = $_POST['tienda'];
$cargo = $_POST['cargo'];


$sentencia = "UPDATE `empleados` SET 
           `RIF`='$rif', `cedula`='$ced', `nombre`='$nom', `apellido`='$ape', 
            `direccion`='$dir', `celular`='$tel_movil', `telefono`='$tel_fijo',
             `n_contactp`='$n_contact',`f_ingreso`='$f_ingre', `f_culminacion`='$f_culmi', 
            `sueldo`='$sueldo',`nacionalidad`='$naci', `tienda`='$tienda', `cargo`='$cargo'
             WHERE          id_empleado=$idemp";

$respuesta = $db->query($sentencia);

header("location:index.php")

?>