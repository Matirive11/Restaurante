<?php
include '../conexion.php';
$id = $_REQUEST['ID_CLIENTE'];
echo "El ID a borrar es: ".$id;
$borrar = "DELETE FROM CLIENTE WHERE ID_CLIENTE =$id";
mysqli_query($conexion, $borrar);
?>
<script type="text/javascript">
    window.location.replace("Principal_cliente.php");
    </script>