<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar orden</title>
    <style>
        form {
            background-color: rgb(0, 255, 255);
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="modificar_orden2.php" method="post" enctype="multipart/form-data">
        <?php
        include "../conexion.php";
        $id = $_REQUEST['ID_ORDENES_DE_PEDIDOS'];
        $sql = "SELECT * FROM ORDENES_DE_PEDIDOS WHERE ID_ORDENES_DE_PEDIDOS = $id";
        $resultado = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($resultado);
        ?>
        <fieldset>
            <legend>Crear Mozo</legend> <br>
            <input type="datetime-local" name="fecha" value="<?php echo $datos['FECHA_Y_HORA']; ?>">
            <br>
            <input type="submit" value="Crear orden">
            <input type="hidden" name="identificador" value="<?php echo $id; ?>">
        </fieldset>
    </form>
</body>
</html>