<?php
include '../conexion.php';

$id = $_REQUEST['ID_ORDENES DE PEDIDOS'];
echo "El ID a borrar es: ".$id;
$borrar = "DELETE FROM ORDENES_DE_PEDIDOS WHERE ID_ORDENES_DE_PEDIDOS =$id";
?>
<script type="text/javascript">
    window.location.replace("principal_orden.php");
    </script>
