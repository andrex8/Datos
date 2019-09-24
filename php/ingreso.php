<?php


$servername = "127.0.0.1";
$database = "Datos";
$username = "root";
$password = "zx18";


$nombre = $_POST['nombre'];
$nit = $_POST['nit'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

echo $nombre;
echo "string";

// Crea la conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// Verificacion de conectividad
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);


 try{
     $conn = new PDO('mysql:host=127.0.0.1;dbname=Datos','root','zx18');
     echo 'Conexion realizada';
    }
catch (PDOException $ex) {
       echo $ex->getMessage();
       exit;
}


try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=Datos','root','zx18');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Datos (Nombre, NIT, Direccion, Correo, Telefono)
    VALUES ('$nombre', '$nit', '$direccion', '$correo', '$telefono')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>
