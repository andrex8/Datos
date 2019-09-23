<?php
require_once 'conexion.php';

 try{
     $conn = new PDO('mysql:host=localhost;dbname=Datos','root','zx18');
     echo 'Conexion realizada';
    }
catch (PDOException $ex) {
       echo $ex->getMessage();
       exit;
    }

/* @var $_POST type */
$nombre= $_POST["nombre"];
$nit = $_POST["nit"];

 $query=("SELECT UsuarioLog,PassLog FROM `Login` "
         . "WHERE `UsuarioLog`='".mysql_real_escape_string($nombre)."' and "
         . "`PassLog`='".mysql_real_escape_string($pass)."'");



$rs= mysql_query($query);
$row=mysql_fetch_object($rs);
$nr = mysql_num_rows($rs);


if($nr == 1){

echo 'No ingreso';
}

else if($nr == 0) {

     header("Location:segundo.html");
}

?>
