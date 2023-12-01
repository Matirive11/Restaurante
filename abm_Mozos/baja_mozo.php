<?php
include '../conexion.php';

$id = $_REQUEST['ID_MOZO'];
echo "El ID a borrar es: ".$id;
$borrar = "DELETE FROM MOZO WHERE ID_MOZO =$id";
mysqli_query($conexion, $borrar);
?>
<script type="text/javascript">
    window.location.replace("principal_mozo.php");
    </script>