<?php
//Datos para conectar a mysql
$servername = "localhost";
$database = "Datos";
$username = "root";
$password = "zx18";
// Crea la conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// Verificacion de conectividad
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
