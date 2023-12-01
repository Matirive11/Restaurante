<?php
include "../conexion.php";
$nombre = $_REQUEST['nombre_ingrediente'];
$stock = $_REQUEST['stock'];
echo "<h2> El resultado es:".$nombre."</h2>";
echo "<h2> El resultado es:".$stock."</h2>";

$sql = "INSERT INTO `INGREDIENTES`(`ID_INGREDIENTES`, `NOMBRE`, `Stock`) VALUES (NULL, '$nombre', $stock)";
 
mysqli_query($conexion, $sql);
?>
<script type="text/javascript">
  window.location.replace("principal_ingredientes.php");
</script>