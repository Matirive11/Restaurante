<?php
include "../conexion.php";
$DESCRIPCION = $_REQUEST['DESCRIPCION'];
echo "<h2> El resultado es:".$DESCRIPCION."</h2>";

$sql = "INSERT INTO `UNIDADES_MEDIDAS`(`ID_UNIDADES_MEDIDAS`, `DESCRIPCION`) VALUES (NULL, '$DESCRIPCION')";
 
mysqli_query($conexion, $sql);
?>
<script type="text/javascript">
    window.location.replace("principal_unidades.php");
</script>