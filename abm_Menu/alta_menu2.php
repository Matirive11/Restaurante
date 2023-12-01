<?php
include "../conexion.php";
$nombre = $_REQUEST ["NOMBRE_MENU"];
$precio = $_REQUEST ["PRECIO"];
echo "<h2> El resultado es:".$precio."</h2>";
echo "<h2> El resultado es:".$nombre."</h2>";
$sql = "INSERT INTO `MENU`(`ID_MENU`, `NOMBRE_MENU`, `PRECIO`) VALUES (NULL, '$nombre', $precio)";
mysqli_query($conexion, $sql);
?>

