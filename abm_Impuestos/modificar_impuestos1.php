<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar impuestos</title>
    <style>
        form {
            background-color: rgb(0, 255, 255);
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="modificar_impuestos2.php" method="post" enctype="multipart/form-data">
        <?php
        include "../conexion.php";
        $id = $_REQUEST['ID_IMPUESTO'];
        $sql = "SELECT * FROM IMPUESTO WHERE ID_IMPUESTO = $id";
        $resultado = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($resultado);
        ?>
        <fieldset>
            <legend>Impuestos</legend>
            <input name="nom_impuesto" placeholder="nombre del impuesto" type="text" value="<?php echo $datos['NOMBRE']; ?>">
            <br>
            <input name="porcentaje" placeholder="porcentaje" step="0.01" required="" type="number" value="<?php echo $datos['PORCENTAJE']; ?>">
            <br>
            <input type="hidden" name="identificador" value="<?php echo $id; ?>">
            <input name="Enviar" value="Modificar Impuesto" type="submit"><br>
        </fieldset>
    </form>
</body>
</html>

