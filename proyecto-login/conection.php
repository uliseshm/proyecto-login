<?php

$server = "";
$username = "";
$password = "";
$database = "";

//se crea la conexion
$conn = mysqli_connect($server, $username, $password, $database);

//se valida
if (!$conn) {
    die("Conexion fallo: " . mysqli_connect_error());
}
echo "Conexión exitosa!";
mysqli_close($conn);


?>