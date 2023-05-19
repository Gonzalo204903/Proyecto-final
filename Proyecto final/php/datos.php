<?php
    $conex = mysqli_connect("localhost", "id19489819_gonzalocarlos", "StartIfDB204903!", "id19489819_startifdb");
    /*Prueba sin exito #23: $mysqliConect=new mysqli('localhost', 'root', 'StartIfDB204903!', 'id19489819_startifdb');
    if (!$mysqliConect) {
        echo "Error de conexión";
    }*/
    /*$nom=$_POST['nombre'];
    $cor=$_POST['correo'];
    $tel=$_POST['telefono'];
    $cuadro=$_POST['cuadro'];
    $chec=$_POST['chec'];

    $insert = "insert into datos(nom, cor, tel, cuadro, chec, bot) VALUES ('$nom', '$cor', '$tel', '$cuadro', '$chec')";
    if (mysqli_query($mysqliConect, $insert)) {
        echo "";
    }
    else{
        echo "Error al guardar los datos";
    }*/
?>