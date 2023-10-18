<?php

$a = $_GET['nombre'];
$b = $_GET['clave'];

echo autenticar("$a", "$b");

function autenticar($nombre, $password)
{
  
    $conexion = new mysqli("localhost", "root", "root", "db_factura");

    $salida = "";
    $imprimir = "SELECT * FROM usuario WHERE nombre='$nombre' AND ID_usuario='$password'";
    $sql = $conexion->query($imprimir);
    if ($datos = $sql->fetch_object()) {
        $salida .= "AUTENTICADO CORRECTAMENTE";
    } else {
         header("location:error.php");
    }

  
    $conexion->close();

    return $salida;

   
}
?>

