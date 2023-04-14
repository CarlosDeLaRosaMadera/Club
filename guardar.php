<?php
include("abre.php");
$Nombre     =$_POST['Nombre'];
$Apellido   =$_POST['Apellido'];
$Calle      =$_POST['Calle'];

$consulta = "INSERT INTO personas(Nombre, Apellido, Calle) VALUES
('$Nombre', '$Apellido', '$Calle')";

    if ($conexion->query($consulta) === TRUE){
        header("Location: form.html");
    }else{
        echo "Error: " . $consulta . "<br>" . $conexion->error;
    }
    $conexion->close();
    ?>