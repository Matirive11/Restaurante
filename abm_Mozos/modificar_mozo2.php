<?php
include "../conexion.php";
$nombre = $_REQUEST['nom_mozo'];
$DNI = $_REQUEST['DNI'];
$id = $_REQUEST['identificador'];
$sql = "UPDATE MOZO SET NOMBRE = '$nombre', DNI = '$DNI' WHERE ID_MOZO = '$id'";
$res = mysqli_query($conexion, $sql);
var_dump($sql);
echo "¡Mozo modificado con éxito!";
?>
<script type="text/javascript">
    window.location.replace("principal_mozo.php");
</script>