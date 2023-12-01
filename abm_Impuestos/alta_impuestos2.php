<?php
include "../conexion.php";
$nombre = $_REQUEST['nom_impuesto'];
$porcentaje = $_REQUEST['porcentaje'];

echo "<h2> El resultado es:".$nombre."</h2>";
echo "<h2> El resultado es:".$porcentaje."</h2>";

$sql = "INSERT INTO `IMPUESTO`(`ID_IMPUESTO`, `NOMBRE`, `PORCENTAJE`) VALUES (NULL, '$nombre', $porcentaje)";
 
mysqli_query($conexion, $sql);
?>
<script type="text/javascript">
  window.location.replace("principal_impuestos.php");
</script>

