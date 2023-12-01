<?php
include "../conexion.php";
$FECHA= $_REQUEST['fecha'];

echo "<h2> El resultado es:".$FECHA."</h2>";

$sql = "INSERT INTO `ORDENES_DE_PEDIDOS`(`ID_ORDENES_DE_PEDIDOS`, `FECHA_Y_HORA`) VALUES (NULL, '$FECHA')";
 
mysqli_query($conexion, $sql);
?>