<?php
include "../conexion.php";
$nombre = $_REQUEST['nombre'];
$descripcion = $_REQUEST['descripcion'];
$id = $_REQUEST['identificador'];

$sql = "UPDATE CATEGORIA SET NOMBRE = '$nombre', DESCRIPCION  = '$descripcion' WHERE ID_CATEGORIA = '$id'";
$res = mysqli_query($conexion, $sql);
var_dump($sql);
echo "¡Categoria modificada con éxito!";
?>
<script type="text/javascript">
    window.location.replace("principal_categoria.php");
</script>