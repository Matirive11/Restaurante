<?php
include "../conexion.php";
$nombre = $_REQUEST['nom_mozo'];
$DNI = $_REQUEST['DNI'];

echo "<h2> El resultado es:".$nombre."</h2>";
echo "<h2> El resultado es:".$DNI."</h2>";

$sql = "INSERT INTO `MOZO`(`ID_MOZO`, `NOMBRE`, `DNI`) VALUES (NULL, '$nombre', $DNI)";
 
mysqli_query($conexion, $sql);
?>
<script type="text/javascript">
    window.location.replace("principal_mozo.php");
</script>