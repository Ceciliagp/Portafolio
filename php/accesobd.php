<?php

$conexion=mysqli_connect('localhost', 'root', '12345', 'bdportafolio');

if(!$conexion){

    echo('ERROR EN LA BASE DE DATOS');

    exit;

}


//echo('EXITO EN LA CONEXIÓN DE LA BASE DE DATOS'); //

insertar($conexion);

function insertar($conexion){

$nombres=$_POST['nombres'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];


$agregar= "INSERT INTO usuarios ('nombres', 'telefono', 'correo', 'mensaje')
VALUES ('$nombres', '$telefono', '$correo', '$mensaje')";



mysqli_query('$conexion','$agregar');
mysqli_close('$conexion');
header("Location:../contacto.html");

}

?>
