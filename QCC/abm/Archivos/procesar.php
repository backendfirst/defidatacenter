<?php
include("config.php");
$c = new Buscador;
$c->Conectar();
$q = $_GET['q'];
if ($q==null) {
	print 'Ingrese algun dato para buscar';
} else {
$c->Buscar($q);
}
?>