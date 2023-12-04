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
            <legend>Mesas</legend>

            <select name="ubicacion" id="ubicacion" placeholder="Seleccione la ubicación"> 
                <option value="0">-- Seleccione la ubicación --</option>
                <option value="Lado inferior Izquierdo">Lado inferior Izquierdo</option>
                <option value="Frente">Frente</option>
                <option value="Asotea">Asotea</option>
                <option value="Lado inferior derecho">Lado inferior derecho</option>
            </select>
            <br>
            <select name="nom_mozo" id="nom_mozo">
                <option value="">-- Seleccione el mozo --</option>
                <?php
                include "../conexion.php";
                $sql = "SELECT MOZO.ID_MOZO, MOZO.NOMBRE FROM MESA JOIN MOZO ON MESA.ID_MOZO  = MOZO.ID_MOZO ";
                $resultado = mysqli_query($conexion, $sql);
                while ($datos = mysqli_fetch_array($resultado)) {
                    $idm1 = $datos['ID_MOZO'];
                    $nombre = $datos['NOMBRE'];
                    echo  "<option value='$idm1'>$nombre</option>";
                }
                $sql2 = "SELECT DISTINCT MOZO.ID_MOZO, NOMBRE FROM MOZO";
                $resultado = mysqli_query($conexion, $sql2);
                while ($datos2 = mysqli_fetch_array($resultado)) {
                    $idm2 = $datos2['ID_MOZO'];
                    $nombre = $datos2['NOMBRE'];
                    echo "<option value='$idm2'>$nombre</option>";
                }
                ?>
            </select>
            <br>
            <label for="Capacidad">Capacidad</label>
            <select name="capa" id="">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <br>
            <input name="Enviar" value="enviar" type="submit"><br>
        </fieldset>
    </form>
</body>
</html>