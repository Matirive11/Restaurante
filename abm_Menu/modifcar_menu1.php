<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar menu</title>
    <style>
        form {
            background-color: rgb(0, 255, 255);
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="modificar_menu2.php" method="post" enctype="multipart/form-data">
        <?php
        include "../conexion.php";
        $id = $_REQUEST['ID_MENU'];
        $sql = "SELECT * FROM MENU WHERE ID_MENU = $id";
        $resultado = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($resultado);
        ?>
        <fieldset>
            <legend>Crear Menu</legend> <br>
            <input type="text" name="NOMBRE_MENU" placeholder="Nombre del menu" value="<?php echo $datos['NOMBRE_MENU']; ?>">
            <br>
            <input type="text" name="PRECIO" placeholder="Precio" value="<?php echo $datos['PRECIO']; ?>">
            <br>
            <input type="submit" value="Modificar Menu">
            <input type="hidden" name="identificador" value="<?php echo $id; ?>">
        </fieldset>
    </form>
</body>
</html>