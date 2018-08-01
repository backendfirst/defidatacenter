<?php

$langfile="";
if(mlang_getcurrentlang() == "Chinese")
	$langfile="Chinese.php";
if(mlang_getcurrentlang() == "Chinese (Hong Kong S.A.R.)")
	$langfile="Hongkong.php";
if(mlang_getcurrentlang() == "Chinese (Taiwan)")
	$langfile="Taiwan.php";
if(mlang_getcurrentlang() == "Czech")
	$langfile="Czech.php";
if(mlang_getcurrentlang() == "Danish")
	$langfile="Danish.php";
if(mlang_getcurrentlang() == "Dutch")
	$langfile="Dutch.php";
if(mlang_getcurrentlang() == "English")
	$langfile="English.php";
if(mlang_getcurrentlang() == "French")
	$langfile="French.php";
if(mlang_getcurrentlang() == "German")
	$langfile="German.php";
if(mlang_getcurrentlang() == "Hebrew")
	$langfile="Hebrew.php";
if(mlang_getcurrentlang() == "Spanish")
	$langfile="Spanish.php";

if($langfile)
	include(getabspath("include/lang/".$langfile));

function mlang_message($tag)
{
	global $mlang_messages,$mlang_defaultlang;
	return @$mlang_messages[mlang_getcurrentlang()][$tag];
}

?>