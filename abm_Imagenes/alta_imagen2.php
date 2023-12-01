<?php
include "../conexion.php";
$nombre = $_POST['nombre_foto'];
$Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));

echo "<h2> El resultado es:".$nombre."</h2>";
echo "<h2> El resultado es:".$Foto."</h2>";

$query = "INSERT INTO `IMAGENES`(`NOMBRE`, `FOTO`) VALUES ('$nombre', '$Foto')";
$resultado = $conexion->query($query);
echo "¡Imagen creada con éxito!";
?>
<script type="text/javascript">
    window.location.replace("principal_imagenes.php");
</script>


