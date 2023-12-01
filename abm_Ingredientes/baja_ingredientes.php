<?php
include '../conexion.php';

$id = $_REQUEST['ID_INGREDIENTES'];
echo "El ID a borrar es: ".$id;
$borrar = "DELETE FROM INGREDIENTES WHERE ID_INGREDIENTES =$id";
mysqli_query($conexion, $borrar);
?>
<script type="text/javascript">
    window.location.replace("principal_ingredientes.php");
    </script>