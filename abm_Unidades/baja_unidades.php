<?php
include '../conexion.php';

$id = $_REQUEST['ID_UNIDADES_MEDIDAS'];
echo "El ID a borrar es: ".$id;
$borrar = "DELETE FROM UNIDADES_MEDIDAS WHERE ID_UNIDADES_MEDIDAS =$id";
mysqli_query($conexion, $borrar);
?>
<script type="text/javascript">
    window.location.replace("principal_unidades.php");
    </script>