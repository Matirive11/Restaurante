<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar mesa</title>
    <style>
        form {
            background-color: rgb(0, 255, 255);
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="modificar_mesa2.php" method="post" enctype="multipart/form-data">
        <?php
        include "../conexion.php";
        $id = $_REQUEST['ID_MESA'];
        $sql = "SELECT * FROM MESA WHERE ID_MESA= $id";
        $resultado = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($resultado);
        ?>
        <fieldset>
            <legend>Crear mesa</legend> <br>
            <input type="text" name="num_mesa" placeholder="Nombre del ingrediente" value="<?php echo $datos['NOMBRE']; ?>">
            <br>
            <input type="text" name="ubicacion" placeholder="Ubicacion" value="<?php echo $datos['Stock']; ?>">
            <br>
            <input type="submit" value="Crear ingrediente">
            <input type="hidden" name="identificador" value="<?php echo $id; ?>">
        </fieldset>
    </form>
</body>
</html>