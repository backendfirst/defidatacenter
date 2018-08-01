<?php
include("config.php");
$c = new Buscador;
$c->Conectar();
$q = $_GET['q'];
$c = mysql_fetch_assoc(mysql_query("SELECT * FROM datos WHERE id='$q'"));
?>
<style type="text/css">
.caja2 {
	width: 150px;
}
</style>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>Nombre:</td>
  </tr>
  <tr>
    <td><input type="text" class="caja2" value="<? print $c['nombre']; ?>" id="nombre"></td>
  </tr>
  <tr>
    <td>Apellido:</td>
  </tr>
  <tr>
    <td><input  type="text" class="caja2" value="<? print $c['apellido']; ?>" id="apellido"></td>
  </tr>
  <tr>
    <td>Email:</td>
  </tr>
  <tr>
    <td><input  type="text" class="caja2" value="<? print $c['email']; ?>" id="email"></td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Editar" onclick="GuardarEdicion(<? print $c['id']; ?>)"></td>
  </tr>
</table>
