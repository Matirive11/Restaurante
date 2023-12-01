<?php
include '../conexion.php';

$id = $_REQUEST['ID_MESA'];
echo "El ID a borrar es: ".$id;
$borrar = "DELETE FROM MESA WHERE ID_MESA =$id";
mysqli_query($conexion, $borrar);
?>
<script type="text/javascript">
    window.location.replace("principal_mesas.php");
    </script>