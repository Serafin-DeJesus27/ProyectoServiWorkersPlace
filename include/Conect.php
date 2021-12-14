<?php

$server = "localhost";
$usuario = "root";
$bd = "hsofft";
$password = "";
$conect = mysqli_connect($server, $usuario, $password, $bd);
   if($conect->connect_error){
     die("Error de conexion de base de datos".$conect->connect_error);
}
else{
echo "Conexion establecida";
}
?>