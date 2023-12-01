<?php
include "../conexion.php";
$nombre = $_REQUEST['nom_Cliente'];
$apellido = $_REQUEST['Apellido'];
$DNI = $_REQUEST['DNI'];
$Correo = $_REQUEST['Correo_Electronico'];

echo "<h2> El resultado es:".$nombre."</h2>";
echo "<h2> El resultado es:".$apellido."</h2>";
echo "<h2> El resultado es:".$DNI."</h2>";
echo "<h2> El resultado es:".$Correo."</h2>";

$sql = "INSERT INTO `CLIENTE`(`ID_CLIENTE`, `NOMBRE`, `APELLIDO`,`DNI`,`EMAIL`) VALUES (NULL, '$nombre', '$apellido', '$DNI', '$Correo')";
 
mysqli_query($conexion, $sql);
?>
<script type="text/javascript">
    window.location.replace("Principal_cliente.php");
</script>