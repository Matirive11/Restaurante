<?php
include "../conexion.php";

$ubicacion = $_REQUEST['ubicacion'];
$mozo = $_REQUEST['nom_mozo'];
$capa = $_REQUEST['capa'];

echo "<h2> El resultado es:".$ubicacion."</h2>";
echo "<h2> El resultado es:".$mozo."</h2>";
echo "<h2> El resultado es:".$capa."</h2>";
$sql = "INSERT INTO `MESA`(`ID_MESA`, `UBICACION`, `ID_MOZO`,`CAPACIDAD`) VALUES (NULL, '$ubicacion', '$mozo', '$capa')";
mysqli_query($conexion, $sql);
?>
<script type="text/javascript">
    window.location.replace("principal_mesas.php");
</script>