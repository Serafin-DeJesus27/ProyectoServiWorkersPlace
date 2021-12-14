<?php
$server = "localhost";
$usuario ="root";
$BD = "hsofft";
$password = "";
$conect = mysqli_connect($server, $usuario, $password, $BD);
   if($conect->connect_error){
     die('Error de conexion de base de datos'.$conect->connect_error);
}
?>