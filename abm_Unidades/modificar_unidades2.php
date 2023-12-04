<?php
include "../conexion.php";
$DESCRIPCION = $_REQUEST['DESCRIPCION'];
$id = $_REQUEST['identificador'];
$sql = "UPDATE UNIDADES_MEDIDAS SET DESCRIPCION = '$DESCRIPCION' WHERE ID_UNIDADES_MEDIDAS = '$id'";
$res = mysqli_query($conexion, $sql);
var_dump($sql);
echo "¡Unidades modificadas con éxito!";
?>
<script type="text/javascript">
    window.location.replace("principal_unidades.php");
</script>