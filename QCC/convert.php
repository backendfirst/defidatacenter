<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Convertir im�genes en base 64</title>
</head>
<body>
<h3>Convertir im�genes en base 64</h3>

<?php
echo '<br /> El c�digo del archivo es el siguiente:<br />';
echo '<textarea  onclick="this.select()" cols="64" rows="12" style="margin:8px 0 8px 0;padding:8px;background-color:#FFFFE0;width:90%;">';
$imagedata = file_get_contents("imagen.png");
echo base64_encode($imagedata);
echo '</textarea>';
?>

</body>
</html>
