<?php
include("bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");

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

$sentencia = "INSERT INTO `empleados`(`RIF`, `cedula`, `nombre`, `apellido`, 
`direccion`, `celular`, `telefono`, `n_contactp`, `f_ingreso`, `f_culminacion`, 
`sueldo`,`nacionalidad`, `tienda`, `cargo`) 
VALUES ('$rif','$ced','$nom','$ape','$dir','$tel_movil','$tel_fijo','$n_contact',
'$f_ingre','$f_culmi','$sueldo','$naci','$tienda','$cargo')";
$respuesta = $db->query($sentencia);

header("location:index.php")

?>