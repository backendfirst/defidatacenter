<?php
$dalTableqcc_audit = array();
$dalTableqcc_audit["id"] = array("type"=>3,"varname"=>"id");
$dalTableqcc_audit["datetime"] = array("type"=>135,"varname"=>"datetime");
$dalTableqcc_audit["ip"] = array("type"=>200,"varname"=>"ip");
$dalTableqcc_audit["user"] = array("type"=>200,"varname"=>"user");
$dalTableqcc_audit["table"] = array("type"=>200,"varname"=>"table");
$dalTableqcc_audit["action"] = array("type"=>200,"varname"=>"action");
$dalTableqcc_audit["description"] = array("type"=>201,"varname"=>"description");
	$dalTableqcc_audit["id"]["key"]=true;

$dal_info["qcc_at_localhost__qcc_audit"] = &$dalTableqcc_audit;
?>