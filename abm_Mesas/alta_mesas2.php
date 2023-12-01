<?php
include "../conexion.php";
$NUMERO = $_REQUEST['num_mesa'];
$ubicacion = $_REQUEST['ubicacion'];
$mozo = $_REQUEST['nom_mozo'];
echo "<h2> El resultado es:".$NUMERO."</h2>";
echo "<h2> El resultado es:".$ubicacion."</h2>";
echo "<h2> El resultado es:".$mozo."</h2>";
$sql = "INSERT INTO `MESA`(`ID_MESA`, `NUMERO`, `UBICACION`) VALUES (NULL, '$NUMERO', '$ubicacion')JOIN 'MOZO'('NOMBRE') VALUES($mozo)";
 
mysqli_query($conexion, $sql);
?>
