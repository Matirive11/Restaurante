<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
    <style>
        form {
            background-color: rgb(0, 255, 255);
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="modificar_cliente2.php" method="post" enctype="multipart/form-data">
        <?php
        include "../conexion.php";
        $id = $_REQUEST['ID_CLIENTE'];
        $sql = "SELECT * FROM CLIENTE WHERE ID_CLIENTE = $id";
        $resultado = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($resultado);
        ?>
        <fieldset>
            <legend>Cliente</legend>
            <input name="nom_Cliente" placeholder="nombre del Cliente" type="text" value="<?php echo $datos['NOMBRE']; ?>">
            <br>
            <input name="Apellido" placeholder="Apellido" required="" type="text" value="<?php echo $datos['APELLIDO']; ?>">
            <br>
            <input name="DNI" placeholder="DNI" step="0.01" required="" type="number" value="<?php echo $datos['DNI']; ?>">
            <br>
            <input name="email" placeholder="Correo Electronic" required="" type="text" value="<?php echo $datos['EMAIL']; ?>">
            <br>
            <input type="hidden" name="identificador" value="<?php echo $id; ?>">
            <input name="Enviar" value="Modificar Cliente" type="submit"><br>
        </fieldset>
    </form>
</body>
</html>