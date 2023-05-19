<?php
    include("datos.php");

    $chec = array();

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $cuadro = $_POST['cuadro'];
    if(isset($_POST['chec'])){
        $chec = $_POST['chec'];
    }else{
        $chec = [];
    }

    $consulta = "INSERT INTO StartIfDB02(nombre, correo, telefono, cuadro, chec) VALUES ('$nombre','$correo','$telefono','$cuadro','$chec')";

    if ($conexion->query($consulta) === TRUE){
        header("Location: ../Contacto.php");
    }else{
        echo "Error: " . $consulta . "<br>" . $conexion->error;
    }

    $conexion->close();
?>