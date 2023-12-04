<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Unidades</title>
    <style>
        form {
            background-color: rgb(0, 255, 255);
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="modificar_unidades2.php" method="post" enctype="multipart/form-data">
        <?php
        include "../conexion.php";
        $id = $_REQUEST['ID_UNIDADES_MEDIDAS'];
        $sql = "SELECT * FROM UNIDADES_MEDIDAS WHERE ID_UNIDADES_MEDIDAS = $id";
        $resultado = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($resultado);
        ?>
        <fieldset>
            <legend>Modificar mozo</legend> <br>
            <input type="text" name="DESCRIPCION" placeholder="DESCRIPCION" value="<?php echo $datos['DESCRIPCION']; ?>">
            <br>
            <input type="submit" value="Modificar Unidades">
            <input type="hidden" name="identificador" value="<?php echo $id; ?>">
        </fieldset>
    </form>
</body>
</html>