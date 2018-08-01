<?php
$dalTableuser = array();
$dalTableuser["id"] = array("type"=>3,"varname"=>"id");
$dalTableuser["fullname"] = array("type"=>200,"varname"=>"fullname");
$dalTableuser["username"] = array("type"=>200,"varname"=>"username");
$dalTableuser["email"] = array("type"=>200,"varname"=>"email");
$dalTableuser["password"] = array("type"=>200,"varname"=>"password");
$dalTableuser["created_at"] = array("type"=>135,"varname"=>"created_at");
$dalTableuser["active"] = array("type"=>3,"varname"=>"active");
	$dalTableuser["id"]["key"]=true;

$dal_info["qcc_at_localhost__user"] = &$dalTableuser;
?>