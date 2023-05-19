<?php
    include("datos.php");
    if (isset($_POST['boton'])){
        if(
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['correo']) >= 1 &&
            strlen($_POST['telefono']) >= 1 &&
            strlen($_POST['cuadro']) >= 1 &&
            strlen($_POST['checkbox']) >= 1
        ){
            $nom = trim($_POST['nombre']);
            $cor = trim($_POST['correo']);
            $tel = trim($_POST['telefono']);
            $cuadro = trim($_POST['cuadro']);
            $chec = trim($_POST['chec']);
            $consulta = "INSERT INTO datos(nombre, correo, telefono, cuadro, chec)
                VALUES('$nombre', '$correo', '$telefono', '$cuadro', '$chec')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="success">Tu registro se ha completado</h3>
                <?php
            }else{
                ?>
                <h3 class="error">Ocurrio un error</h3>
                <?php
            }
        }else{
            ?>
                <h3 class="error">LLene los campos</h3>
            <?php
        }
    }

?>