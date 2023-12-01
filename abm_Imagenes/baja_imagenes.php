<?php
include '../conexion.php';

$id = $_REQUEST['ID_IMAGENES'];
echo "El ID a borrar es: ".$id;
$borrar = "DELETE FROM IMAGENES WHERE ID_IMAGENES =$id";
mysqli_query($conexion, $borrar);

?>
<script type="text/javascript">
    
    window.location.replace("Principal_imagenes.php");
    </script>

