<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Categoria</title>
    <style>
        form {
            background-color: rgb(0, 255, 255);
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="modificar_categoria2.php" method="post" enctype="multipart/form-data">
        <?php
        include "../conexion.php";
        $id = $_REQUEST['ID_CATEGORIA'];
        $sql = "SELECT * FROM CATEGORIA WHERE ID_CATEGORIA = $id";
        $resultado = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($resultado);
        ?>
        <fieldset>
            <legend>Modificar Categoria</legend> <br>
            <input type="text" name="nombre" placeholder="Nombre de la Categoria" value="<?php echo $datos['NOMBRE']; ?>">
            <br>
            <textarea name="descripcion" placeholder="Descripcion" rows="5" value= "<?php echo $datos['DESCRIPCION']; ?>>"></textarea>
            <br>
            <input type="submit" value="Modificar Categoria">
            <input type="hidden" name="identificador" value="<?php echo $id; ?>">
        </fieldset>
    </form>
</body>
</html>