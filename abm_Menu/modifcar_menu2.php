<?php
include "../conexion.php";
$nombre = $_REQUEST['nombre_ingrediente'];
$Stock = $_REQUEST['stock'];
$id = $_REQUEST['identificador'];
$sql = "UPDATE INGREDIENTES SET NOMBRE = '$nombre', Stock = '$Stock' WHERE ID_INGREDIENTES = '$id'";
$res = mysqli_query($conexion, $sql);
var_dump($sql);
echo "¡Ingrediente modificado con éxito!";
?>
<script type="text/javascript">
    window.location.replace("principal_ingredientes.php");
</script>