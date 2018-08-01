<?php
include("config.php");
$c = new Buscador;
$c->Conectar();
$id = $_GET['id'];
$nombre =$_GET['n'];
$apellido = $_GET['a'];
$email = $_GET['e'];
$act = mysql_query("UPDATE datos SET nombre='$nombre' WHERE id='$id'");
$act = mysql_query("UPDATE datos SET apellido='$apellido' WHERE id='$id'");
$act = mysql_query("UPDATE datos SET email='$email' WHERE id='$id'");
if ($act) {
	print 'Se actualizo el registro correctamente';
} else { 
	print 'Se produjo algun error';	
}
?>
