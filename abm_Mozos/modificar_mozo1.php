<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar mozo</title>
    <style>
        form {
            background-color: rgb(0, 255, 255);
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="modificar_mozo2.php" method="post" enctype="multipart/form-data">
        <?php
        include "../conexion.php";
        $id = $_REQUEST['ID_MOZO'];
        $sql = "SELECT * FROM MOZO WHERE ID_MOZO = $id";
        $resultado = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($resultado);
        ?>
        <fieldset>
            <legend>Modificar mozo</legend> <br>
            <input type="text" name="nom_mozo" placeholder="Nombre del mozo" value="<?php echo $datos['NOMBRE']; ?>">
            <br>
            <input type="nummber" name="DNI" placeholder="DNI" value="<?php echo $datos['DNI']; ?>">
            <br>
            <input type="submit" value="Modificar mozo">
            <input type="hidden" name="identificador" value="<?php echo $id; ?>">
        </fieldset>
    </form>
</body>
</html>