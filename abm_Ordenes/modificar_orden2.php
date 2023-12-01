<?php
include "../conexion.php";
$FECHA= $_REQUEST['fecha'];
$id = $_REQUEST['identificador'];
$sql = "UPDATE ORDENES_DE_PEDIDOS SET FECHA_Y_HORA = '$FECHA', WHERE ID_ORDENES_DE_PEDIDOS = '$id'";
$res = mysqli_query($conexion, $sql);
var_dump($sql);
echo "¡orden modificado con éxito!";
?>
<script type="text/javascript">
    window.location.replace("principal_orden.php");
</script>