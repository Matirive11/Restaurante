<?php
include "../conexion.php";

$Nombre = $_REQUEST['nom_Cliente'];
$apellido = $_REQUEST['Apellido'];
$dni = $_REQUEST['DNI'];
$email = $_REQUEST['email'];
$id = $_REQUEST['identificador'];

$sql = "UPDATE CLIENTE SET NOMBRE = '$Nombre', APELLIDO = '$apellido' , DNI = '$dni' , EMAIL = '$email' WHERE ID_CLIENTE = '$id'";
$res = mysqli_query($conexion, $sql);
var_dump($sql);
echo "¡Imagen modificado con éxito!";
?>
<script type="text/javascript">
    window.location.replace("Principal_cliente.php");
</script>