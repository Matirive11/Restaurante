<?php
include '../conexion.php';

$id = $_REQUEST['ID_IMPUESTO'];
echo "El ID a borrar es: ".$id;
$borrar = "DELETE FROM IMPUESTO WHERE ID_IMPUESTO =$id";
mysqli_query($conexion, $borrar);
?>
<script type="text/javascript">
    window.location.replace("principal_impuestos.php");
    </script>

