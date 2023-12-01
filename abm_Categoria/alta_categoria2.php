<?php
include "../conexion.php";
$nombre = $_REQUEST['nombre'];
$descripcion = $_REQUEST['descripcion'];

echo "<h2> El resultado es:".$nombre."</h2>";
echo "<h2> El resultado es:".$descripcion."</h2>";

$sql = "INSERT INTO `CATEGORIA`(`ID_CATEGORIA`, `NOMBRE`, `DESCRIPCION`) VALUES (NULL, '$nombre', '$descripcion')";
 
mysqli_query($conexion, $sql);
?>
<script type="text/javascript">
  window.location.replace("principal_categoria.php");
</script>
