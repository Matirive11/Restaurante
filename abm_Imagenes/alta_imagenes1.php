<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear imágenes</title>
    <style>
        form {
            background-color: rgb(0, 255, 255);
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="alta_imagen2.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Crear imagen</legend> <br>
            <input type="file" name="Foto" accept=".jpg, .png, .svg">
            <br>
            <input type="text" name="nombre_foto" placeholder="Nombre de la imagen">
            <br>
            <input type="submit" value="Crear imagen">
        </fieldset>
    </form>
</body>
</html>
<?php
