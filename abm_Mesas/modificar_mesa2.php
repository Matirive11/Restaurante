<?php
include "../conexion.php";
$NUMERO = $_REQUEST['num_mesa'];
$ubicacion = $_REQUEST['ubicacion'];
$id = $_REQUEST['identificador'];
$sql = "UPDATE IMPUESTO SET NUMERO = '$NUMERO', UBICACION = '$ubicacion' WHERE ID_MESA = '$id'";
$res = mysqli_query($conexion, $sql);
var_dump($sql);
echo "¡Mesa modificado con éxito!";
?>
<script type="text/javascript">
    window.location.replace("principal_mesas.php");
</script>