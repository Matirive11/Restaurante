<?php
include "../conexion.php";
$nombre = $_REQUEST['nombre_foto'];
$Foto = $_REQUEST['Foto'];
$id = $_REQUEST['identificador'];
$sql = "UPDATE IMAGENES SET NOMBRE = '$nombre', FOTO = '$Foto' WHERE ID_IMAGENES = '$id'";
$res = mysqli_query($conexion, $sql);
var_dump($sql);
echo "¡Imagen modificado con éxito!";
?>
<script type="text/javascript">
    window.location.replace("principal_imagenes.php");
</script>