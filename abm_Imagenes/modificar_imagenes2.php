<?php
include "../conexion.php";
$nombre = $_POST['nombre_foto'];
$Foto = $_FILES['Foto']['name'];
$foto_tmp = $_FILES['Foto']['tmp_name'];
move_uploaded_file($foto_tmp, "../img/".$Foto);
$id = $_POST['identificador'];
$sql = "UPDATE IMAGENES SET NOMBRE = '$nombre', FOTO = '$Foto' WHERE ID_IMAGENES = '$id'";
$res = mysqli_query($conexion, $sql);
echo "¡Imagen modificada con éxito!";
?>
<script type="text/javascript">
    window.location.replace("principal_imagenes.php");
</script>