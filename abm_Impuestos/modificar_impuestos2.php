<?php
include "../conexion.php";
$nombre = $_REQUEST['nom_impuesto'];
$porcentaje = $_REQUEST['porcentaje'];
$id = $_REQUEST['identificador'];
$sql = "UPDATE IMPUESTO SET NOMBRE = '$nombre', PORCENTAJE = '$porcentaje' WHERE ID_IMPUESTO = '$id'";
$res = mysqli_query($conexion, $sql);
var_dump($sql);
echo "¡Impuesto modificado con éxito!";
?>
<script type="text/javascript">
    window.location.replace("principal_impuestos.php");
</script>