<?php
include '../conexion.php';

$id = $_REQUEST['ID_CATEGORIA'];
echo "El ID a borrar es: ".$id;
$borrar = "DELETE FROM CATEGORIA WHERE ID_CATEGORIA =$id";
mysqli_query($conexion, $borrar);

?>
<script type="text/javascript">
    
    window.location.replace("principal_categoria.php");
    </script>