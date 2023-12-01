<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear mesas</title>
<style>
    form{
background-color: rgb(0, 255, 255);
width: 50%;
margin: 0 auto;
    }
</style>
  </head>
  <body>
    <form action="alta_mesas2.php" method="post" enctype="multipart/form-data">
      
      <fieldset> <legend> Mesas </legend>
      <input type="number" name="num_mesa" placeholder="numero de mesa">
      <br>
   <select name="ubicacion" id=""placeholder="Ubicacion"> 
   <option value="">Lado inferior Izquierdo</option>
   <option value="">Frente</option>
   <option value="">Asotea</option>
   <option value="">Lado inferior derecho</option>
   </select>
         <br>     
            <select name="nom_mozo" id="">
            <?php
              include "../conexion.php";
              $sql = "SELECT * FROM MOZO WHERE ID_MOZO ";
              $resultado = mysqli_query($conexion, $sql);
             while( $datos = mysqli_fetch_array($resultado)){
              $nomozo = $datos['NOMBRE'];
                 echo  '<option value='$nomozo' name="nom_mozo" selected>$nomozo</option>';
                }
            ?>
            </select>
            <br>
        <input name="Enviar" value="enviar" type="submit"><br>
      </fieldset>
    </form>
  </body>
</html>
