<?php
$dalTableclientes = array();
$dalTableclientes["id"] = array("type"=>3,"varname"=>"id");
$dalTableclientes["cliente"] = array("type"=>200,"varname"=>"cliente");
$dalTableclientes["roc"] = array("type"=>200,"varname"=>"roc");
$dalTableclientes["norma"] = array("type"=>200,"varname"=>"norma");
$dalTableclientes["estatus"] = array("type"=>200,"varname"=>"estatus");
$dalTableclientes["sector"] = array("type"=>200,"varname"=>"sector");
$dalTableclientes["NOTAS"] = array("type"=>201,"varname"=>"NOTAS");
	$dalTableclientes["id"]["key"]=true;

$dal_info["qcc_at_localhost__clientes"] = &$dalTableclientes;
?>