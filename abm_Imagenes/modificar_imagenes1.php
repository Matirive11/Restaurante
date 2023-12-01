<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar imagen</title>
    <style>
        form {
            background-color: rgb(0, 255, 255);
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="modificar_imagenes2.php" method="post" enctype="multipart/form-data">
        <?php
        include "../conexion.php";
        $id = $_REQUEST['ID_IMAGENES'];
        $sql = "SELECT * FROM IMAGENES WHERE ID_IMAGENES = $id";
        $resultado = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($resultado);
        ?>
<fieldset>
            <legend>Crear imagen</legend> <br>
            <input type="file" name="Foto" value="Cargar imagen" accept=".jpg, .png, .svg"<?php echo $datos['FOTO']; ?>>
            <br>
            <input type="text" name="nombre_foto" placeholder="Nombre de la imagen"value="<?php echo $datos['NOMBRE']; ?>">
            <br>
            <input type="hidden" name="identificador" value="<?php echo $id; ?>">
            <select name="" id="">
                <option value="1">Defecto</option>
                <option value="1">Prueba</option>
            </select>
            <input type="submit" value="Modificar imagen">
        </fieldset>
    </form>
</body>
</html>