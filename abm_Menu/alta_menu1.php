<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Menu</title>
<style>
    form{
background-color: rgb(0, 255, 255);
width: 50%;
margin: 0 auto;
    }
</style>
</head>
<body>
    <form action="alta_menu2.php" method="post" enctype="multipart/form-data">
       
        <fieldset>
            <legend>Crear Menu</legend> <br>
            <input type="text" name="NOMBRE_MENU" placeholder="Nombre del menu">
            <br>
            <input type="text" name="PRECIO" placeholder="Precio">
            <br>
            <select name="" id="">
                <option value="1">Defecto</option>
                <option value="1">Prueba</option>
            </select>
            <input type="submit" value="Crear menu"> <br>
            <?php 
            include "../conexion.php";
            $sql = "SELECT "
            ?>
       
        </fieldset>


    </form>
</body>
</html>