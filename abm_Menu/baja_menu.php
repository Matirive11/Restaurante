<?php
include '../conexion.php';

$id = $_REQUEST['ID_MENU'];
echo "El ID a borrar es: ".$id;
$borrar = "DELETE FROM MENU WHERE ID_MENU =$id";
mysqli_query($conexion, $borrar);
?>
<script type="text/javascript">
    window.location.replace("Principal_menu.php");
    </script>

