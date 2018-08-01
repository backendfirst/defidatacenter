<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_users = array();
	$tdataadmin_users[".truncateText"] = true;
	$tdataadmin_users[".NumberOfChars"] = 80;
	$tdataadmin_users[".ShortName"] = "admin_users";
	$tdataadmin_users[".OwnerID"] = "id";
	$tdataadmin_users[".OriginalTable"] = "user";

//	field labels
$fieldLabelsadmin_users = array();
$fieldToolTipsadmin_users = array();
$pageTitlesadmin_users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_users["Spanish"] = array();
	$fieldToolTipsadmin_users["Spanish"] = array();
	$pageTitlesadmin_users["Spanish"] = array();
	$fieldLabelsadmin_users["Spanish"]["id"] = "Id";
	$fieldToolTipsadmin_users["Spanish"]["id"] = "";
	$fieldLabelsadmin_users["Spanish"]["fullname"] = "Nombre Completo";
	$fieldToolTipsadmin_users["Spanish"]["fullname"] = "";
	$fieldLabelsadmin_users["Spanish"]["username"] = "Nombre de Usuario";
	$fieldToolTipsadmin_users["Spanish"]["username"] = "";
	$fieldLabelsadmin_users["Spanish"]["email"] = "Email";
	$fieldToolTipsadmin_users["Spanish"]["email"] = "";
	$fieldLabelsadmin_users["Spanish"]["password"] = "Password";
	$fieldToolTipsadmin_users["Spanish"]["password"] = "";
	$fieldLabelsadmin_users["Spanish"]["created_at"] = "Fecha de Creacion";
	$fieldToolTipsadmin_users["Spanish"]["created_at"] = "";
	if (count($fieldToolTipsadmin_users["Spanish"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsadmin_users["Chinese"] = array();
	$fieldToolTipsadmin_users["Chinese"] = array();
	$pageTitlesadmin_users["Chinese"] = array();
	$fieldLabelsadmin_users["Chinese"]["id"] = "Id";
	$fieldToolTipsadmin_users["Chinese"]["id"] = "";
	$fieldLabelsadmin_users["Chinese"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_users["Chinese"]["fullname"] = "";
	$fieldLabelsadmin_users["Chinese"]["username"] = "Username";
	$fieldToolTipsadmin_users["Chinese"]["username"] = "";
	$fieldLabelsadmin_users["Chinese"]["email"] = "Email";
	$fieldToolTipsadmin_users["Chinese"]["email"] = "";
	$fieldLabelsadmin_users["Chinese"]["password"] = "Password";
	$fieldToolTipsadmin_users["Chinese"]["password"] = "";
	$fieldLabelsadmin_users["Chinese"]["created_at"] = "Created At";
	$fieldToolTipsadmin_users["Chinese"]["created_at"] = "";
	if (count($fieldToolTipsadmin_users["Chinese"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese (Hong Kong S.A.R.)")
{
	$fieldLabelsadmin_users["Chinese (Hong Kong S.A.R.)"] = array();
	$fieldToolTipsadmin_users["Chinese (Hong Kong S.A.R.)"] = array();
	$pageTitlesadmin_users["Chinese (Hong Kong S.A.R.)"] = array();
	$fieldLabelsadmin_users["Chinese (Hong Kong S.A.R.)"]["id"] = "Id";
	$fieldToolTipsadmin_users["Chinese (Hong Kong S.A.R.)"]["id"] = "";
	$fieldLabelsadmin_users["Chinese (Hong Kong S.A.R.)"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_users["Chinese (Hong Kong S.A.R.)"]["fullname"] = "";
	$fieldLabelsadmin_users["Chinese (Hong Kong S.A.R.)"]["username"] = "Username";
	$fieldToolTipsadmin_users["Chinese (Hong Kong S.A.R.)"]["username"] = "";
	$fieldLabelsadmin_users["Chinese (Hong Kong S.A.R.)"]["email"] = "Email";
	$fieldToolTipsadmin_users["Chinese (Hong Kong S.A.R.)"]["email"] = "";
	$fieldLabelsadmin_users["Chinese (Hong Kong S.A.R.)"]["password"] = "Password";
	$fieldToolTipsadmin_users["Chinese (Hong Kong S.A.R.)"]["password"] = "";
	$fieldLabelsadmin_users["Chinese (Hong Kong S.A.R.)"]["created_at"] = "Created At";
	$fieldToolTipsadmin_users["Chinese (Hong Kong S.A.R.)"]["created_at"] = "";
	if (count($fieldToolTipsadmin_users["Chinese (Hong Kong S.A.R.)"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese (Taiwan)")
{
	$fieldLabelsadmin_users["Chinese (Taiwan)"] = array();
	$fieldToolTipsadmin_users["Chinese (Taiwan)"] = array();
	$pageTitlesadmin_users["Chinese (Taiwan)"] = array();
	$fieldLabelsadmin_users["Chinese (Taiwan)"]["id"] = "Id";
	$fieldToolTipsadmin_users["Chinese (Taiwan)"]["id"] = "";
	$fieldLabelsadmin_users["Chinese (Taiwan)"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_users["Chinese (Taiwan)"]["fullname"] = "";
	$fieldLabelsadmin_users["Chinese (Taiwan)"]["username"] = "Username";
	$fieldToolTipsadmin_users["Chinese (Taiwan)"]["username"] = "";
	$fieldLabelsadmin_users["Chinese (Taiwan)"]["email"] = "Email";
	$fieldToolTipsadmin_users["Chinese (Taiwan)"]["email"] = "";
	$fieldLabelsadmin_users["Chinese (Taiwan)"]["password"] = "Password";
	$fieldToolTipsadmin_users["Chinese (Taiwan)"]["password"] = "";
	$fieldLabelsadmin_users["Chinese (Taiwan)"]["created_at"] = "Created At";
	$fieldToolTipsadmin_users["Chinese (Taiwan)"]["created_at"] = "";
	if (count($fieldToolTipsadmin_users["Chinese (Taiwan)"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Czech")
{
	$fieldLabelsadmin_users["Czech"] = array();
	$fieldToolTipsadmin_users["Czech"] = array();
	$pageTitlesadmin_users["Czech"] = array();
	$fieldLabelsadmin_users["Czech"]["id"] = "Id";
	$fieldToolTipsadmin_users["Czech"]["id"] = "";
	$fieldLabelsadmin_users["Czech"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_users["Czech"]["fullname"] = "";
	$fieldLabelsadmin_users["Czech"]["username"] = "Username";
	$fieldToolTipsadmin_users["Czech"]["username"] = "";
	$fieldLabelsadmin_users["Czech"]["email"] = "Email";
	$fieldToolTipsadmin_users["Czech"]["email"] = "";
	$fieldLabelsadmin_users["Czech"]["password"] = "Password";
	$fieldToolTipsadmin_users["Czech"]["password"] = "";
	$fieldLabelsadmin_users["Czech"]["created_at"] = "Created At";
	$fieldToolTipsadmin_users["Czech"]["created_at"] = "";
	if (count($fieldToolTipsadmin_users["Czech"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Danish")
{
	$fieldLabelsadmin_users["Danish"] = array();
	$fieldToolTipsadmin_users["Danish"] = array();
	$pageTitlesadmin_users["Danish"] = array();
	$fieldLabelsadmin_users["Danish"]["id"] = "Id";
	$fieldToolTipsadmin_users["Danish"]["id"] = "";
	$fieldLabelsadmin_users["Danish"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_users["Danish"]["fullname"] = "";
	$fieldLabelsadmin_users["Danish"]["username"] = "Username";
	$fieldToolTipsadmin_users["Danish"]["username"] = "";
	$fieldLabelsadmin_users["Danish"]["email"] = "Email";
	$fieldToolTipsadmin_users["Danish"]["email"] = "";
	$fieldLabelsadmin_users["Danish"]["password"] = "Password";
	$fieldToolTipsadmin_users["Danish"]["password"] = "";
	$fieldLabelsadmin_users["Danish"]["created_at"] = "Created At";
	$fieldToolTipsadmin_users["Danish"]["created_at"] = "";
	if (count($fieldToolTipsadmin_users["Danish"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Dutch")
{
	$fieldLabelsadmin_users["Dutch"] = array();
	$fieldToolTipsadmin_users["Dutch"] = array();
	$pageTitlesadmin_users["Dutch"] = array();
	$fieldLabelsadmin_users["Dutch"]["id"] = "Id";
	$fieldToolTipsadmin_users["Dutch"]["id"] = "";
	$fieldLabelsadmin_users["Dutch"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_users["Dutch"]["fullname"] = "";
	$fieldLabelsadmin_users["Dutch"]["username"] = "Username";
	$fieldToolTipsadmin_users["Dutch"]["username"] = "";
	$fieldLabelsadmin_users["Dutch"]["email"] = "Email";
	$fieldToolTipsadmin_users["Dutch"]["email"] = "";
	$fieldLabelsadmin_users["Dutch"]["password"] = "Password";
	$fieldToolTipsadmin_users["Dutch"]["password"] = "";
	$fieldLabelsadmin_users["Dutch"]["created_at"] = "Created At";
	$fieldToolTipsadmin_users["Dutch"]["created_at"] = "";
	if (count($fieldToolTipsadmin_users["Dutch"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_users["English"] = array();
	$fieldToolTipsadmin_users["English"] = array();
	$pageTitlesadmin_users["English"] = array();
	$fieldLabelsadmin_users["English"]["id"] = "Id";
	$fieldToolTipsadmin_users["English"]["id"] = "";
	$fieldLabelsadmin_users["English"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_users["English"]["fullname"] = "";
	$fieldLabelsadmin_users["English"]["username"] = "Username";
	$fieldToolTipsadmin_users["English"]["username"] = "";
	$fieldLabelsadmin_users["English"]["email"] = "Email";
	$fieldToolTipsadmin_users["English"]["email"] = "";
	$fieldLabelsadmin_users["English"]["password"] = "Password";
	$fieldToolTipsadmin_users["English"]["password"] = "";
	$fieldLabelsadmin_users["English"]["created_at"] = "Created At";
	$fieldToolTipsadmin_users["English"]["created_at"] = "";
	if (count($fieldToolTipsadmin_users["English"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsadmin_users["French"] = array();
	$fieldToolTipsadmin_users["French"] = array();
	$pageTitlesadmin_users["French"] = array();
	$fieldLabelsadmin_users["French"]["id"] = "Id";
	$fieldToolTipsadmin_users["French"]["id"] = "";
	$fieldLabelsadmin_users["French"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_users["French"]["fullname"] = "";
	$fieldLabelsadmin_users["French"]["username"] = "Username";
	$fieldToolTipsadmin_users["French"]["username"] = "";
	$fieldLabelsadmin_users["French"]["email"] = "Email";
	$fieldToolTipsadmin_users["French"]["email"] = "";
	$fieldLabelsadmin_users["French"]["password"] = "Password";
	$fieldToolTipsadmin_users["French"]["password"] = "";
	$fieldLabelsadmin_users["French"]["created_at"] = "Created At";
	$fieldToolTipsadmin_users["French"]["created_at"] = "";
	if (count($fieldToolTipsadmin_users["French"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsadmin_users["German"] = array();
	$fieldToolTipsadmin_users["German"] = array();
	$pageTitlesadmin_users["German"] = array();
	$fieldLabelsadmin_users["German"]["id"] = "Id";
	$fieldToolTipsadmin_users["German"]["id"] = "";
	$fieldLabelsadmin_users["German"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_users["German"]["fullname"] = "";
	$fieldLabelsadmin_users["German"]["username"] = "Username";
	$fieldToolTipsadmin_users["German"]["username"] = "";
	$fieldLabelsadmin_users["German"]["email"] = "Email";
	$fieldToolTipsadmin_users["German"]["email"] = "";
	$fieldLabelsadmin_users["German"]["password"] = "Password";
	$fieldToolTipsadmin_users["German"]["password"] = "";
	$fieldLabelsadmin_users["German"]["created_at"] = "Created At";
	$fieldToolTipsadmin_users["German"]["created_at"] = "";
	if (count($fieldToolTipsadmin_users["German"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Hebrew")
{
	$fieldLabelsadmin_users["Hebrew"] = array();
	$fieldToolTipsadmin_users["Hebrew"] = array();
	$pageTitlesadmin_users["Hebrew"] = array();
	$fieldLabelsadmin_users["Hebrew"]["id"] = "Id";
	$fieldToolTipsadmin_users["Hebrew"]["id"] = "";
	$fieldLabelsadmin_users["Hebrew"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_users["Hebrew"]["fullname"] = "";
	$fieldLabelsadmin_users["Hebrew"]["username"] = "Username";
	$fieldToolTipsadmin_users["Hebrew"]["username"] = "";
	$fieldLabelsadmin_users["Hebrew"]["email"] = "Email";
	$fieldToolTipsadmin_users["Hebrew"]["email"] = "";
	$fieldLabelsadmin_users["Hebrew"]["password"] = "Password";
	$fieldToolTipsadmin_users["Hebrew"]["password"] = "";
	$fieldLabelsadmin_users["Hebrew"]["created_at"] = "Created At";
	$fieldToolTipsadmin_users["Hebrew"]["created_at"] = "";
	if (count($fieldToolTipsadmin_users["Hebrew"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_users[""] = array();
	$fieldToolTipsadmin_users[""] = array();
	$pageTitlesadmin_users[""] = array();
	if (count($fieldToolTipsadmin_users[""]))
		$tdataadmin_users[".isUseToolTips"] = true;
}


	$tdataadmin_users[".NCSearch"] = true;



$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 1;
$tdataadmin_users[".recsPerRowPrint"] = 1;
$tdataadmin_users[".mainTableOwnerID"] = "id";
$tdataadmin_users[".moveNext"] = 1;
$tdataadmin_users[".entityType"] = 1;

$tdataadmin_users[".strOriginalTableName"] = "user";

	



$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_users[".fieldsForRegister"] = array();
	
$tdataadmin_users[".listAjax"] = false;

	$tdataadmin_users[".audit"] = true;

	$tdataadmin_users[".locking"] = false;



$tdataadmin_users[".list"] = true;

$tdataadmin_users[".inlineEdit"] = true;
$tdataadmin_users[".inlineAdd"] = true;


$tdataadmin_users[".exportTo"] = true;

$tdataadmin_users[".printFriendly"] = true;

$tdataadmin_users[".delete"] = true;

$tdataadmin_users[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataadmin_users[".searchSaving"] = false;
//

$tdataadmin_users[".showSearchPanel"] = true;
		$tdataadmin_users[".flexibleSearch"] = true;

$tdataadmin_users[".isUseAjaxSuggest"] = true;

$tdataadmin_users[".rowHighlite"] = true;



$tdataadmin_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;



$tdataadmin_users[".badgeColor"] = "1E90FF";


$tdataadmin_users[".allSearchFields"] = array();
$tdataadmin_users[".filterFields"] = array();
$tdataadmin_users[".requiredSearchFields"] = array();

$tdataadmin_users[".allSearchFields"][] = "id";
	$tdataadmin_users[".allSearchFields"][] = "fullname";
	$tdataadmin_users[".allSearchFields"][] = "username";
	$tdataadmin_users[".allSearchFields"][] = "email";
	$tdataadmin_users[".allSearchFields"][] = "password";
	$tdataadmin_users[".allSearchFields"][] = "created_at";
	

$tdataadmin_users[".googleLikeFields"] = array();
$tdataadmin_users[".googleLikeFields"][] = "id";
$tdataadmin_users[".googleLikeFields"][] = "fullname";
$tdataadmin_users[".googleLikeFields"][] = "username";
$tdataadmin_users[".googleLikeFields"][] = "email";
$tdataadmin_users[".googleLikeFields"][] = "password";
$tdataadmin_users[".googleLikeFields"][] = "created_at";


$tdataadmin_users[".advSearchFields"] = array();
$tdataadmin_users[".advSearchFields"][] = "id";
$tdataadmin_users[".advSearchFields"][] = "fullname";
$tdataadmin_users[".advSearchFields"][] = "username";
$tdataadmin_users[".advSearchFields"][] = "email";
$tdataadmin_users[".advSearchFields"][] = "password";
$tdataadmin_users[".advSearchFields"][] = "created_at";

$tdataadmin_users[".tableType"] = "list";

$tdataadmin_users[".printerPageOrientation"] = 0;
$tdataadmin_users[".nPrinterPageScale"] = 100;

$tdataadmin_users[".nPrinterSplitRecords"] = 40;

$tdataadmin_users[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_users[".geocodingEnabled"] = false;





$tdataadmin_users[".listGridLayout"] = 3;

$tdataadmin_users[".isDisplayLoading"] = true;

$tdataadmin_users[".isResizeColumns"] = true;


$tdataadmin_users[".noRecordsFirstPage"] = true;

// view page pdf

// print page pdf


$tdataadmin_users[".pageSize"] = 20;

$tdataadmin_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_users[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users[".orderindexes"] = array();

$tdataadmin_users[".sqlHead"] = "SELECT id,  	fullname,  	username,  	email,  	password,  	created_at";
$tdataadmin_users[".sqlFrom"] = "FROM `user`";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_users[".highlightSearchResults"] = true;

$tableKeysadmin_users = array();
$tableKeysadmin_users[] = "id";
$tdataadmin_users[".Keys"] = $tableKeysadmin_users;

$tdataadmin_users[".listFields"] = array();
$tdataadmin_users[".listFields"][] = "id";
$tdataadmin_users[".listFields"][] = "fullname";
$tdataadmin_users[".listFields"][] = "username";
$tdataadmin_users[".listFields"][] = "email";
$tdataadmin_users[".listFields"][] = "password";
$tdataadmin_users[".listFields"][] = "created_at";

$tdataadmin_users[".hideMobileList"] = array();


$tdataadmin_users[".viewFields"] = array();
$tdataadmin_users[".viewFields"][] = "id";
$tdataadmin_users[".viewFields"][] = "fullname";
$tdataadmin_users[".viewFields"][] = "username";
$tdataadmin_users[".viewFields"][] = "email";
$tdataadmin_users[".viewFields"][] = "password";
$tdataadmin_users[".viewFields"][] = "created_at";

$tdataadmin_users[".addFields"] = array();
$tdataadmin_users[".addFields"][] = "fullname";
$tdataadmin_users[".addFields"][] = "username";
$tdataadmin_users[".addFields"][] = "email";
$tdataadmin_users[".addFields"][] = "password";
$tdataadmin_users[".addFields"][] = "created_at";

$tdataadmin_users[".masterListFields"] = array();
$tdataadmin_users[".masterListFields"][] = "id";
$tdataadmin_users[".masterListFields"][] = "fullname";
$tdataadmin_users[".masterListFields"][] = "username";
$tdataadmin_users[".masterListFields"][] = "email";
$tdataadmin_users[".masterListFields"][] = "password";
$tdataadmin_users[".masterListFields"][] = "created_at";

$tdataadmin_users[".inlineAddFields"] = array();

$tdataadmin_users[".editFields"] = array();
$tdataadmin_users[".editFields"][] = "fullname";
$tdataadmin_users[".editFields"][] = "username";
$tdataadmin_users[".editFields"][] = "email";
$tdataadmin_users[".editFields"][] = "password";
$tdataadmin_users[".editFields"][] = "created_at";

$tdataadmin_users[".inlineEditFields"] = array();

$tdataadmin_users[".exportFields"] = array();
$tdataadmin_users[".exportFields"][] = "id";
$tdataadmin_users[".exportFields"][] = "fullname";
$tdataadmin_users[".exportFields"][] = "username";
$tdataadmin_users[".exportFields"][] = "email";
$tdataadmin_users[".exportFields"][] = "password";
$tdataadmin_users[".exportFields"][] = "created_at";

$tdataadmin_users[".importFields"] = array();
$tdataadmin_users[".importFields"][] = "id";
$tdataadmin_users[".importFields"][] = "fullname";
$tdataadmin_users[".importFields"][] = "username";
$tdataadmin_users[".importFields"][] = "email";
$tdataadmin_users[".importFields"][] = "password";
$tdataadmin_users[".importFields"][] = "created_at";

$tdataadmin_users[".printFields"] = array();
$tdataadmin_users[".printFields"][] = "id";
$tdataadmin_users[".printFields"][] = "fullname";
$tdataadmin_users[".printFields"][] = "username";
$tdataadmin_users[".printFields"][] = "email";
$tdataadmin_users[".printFields"][] = "password";
$tdataadmin_users[".printFields"][] = "created_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_users","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["id"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_users","fullname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["fullname"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_users","username");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["register"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["username"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_users","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["email"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_users","password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["password"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_users","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataadmin_users["created_at"] = $fdata;


$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;
$page_titles["admin_users"] = &$pageTitlesadmin_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fullname,  	username,  	email,  	password,  	created_at";
$proto0["m_strFrom"] = "FROM `user`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "user",
	"m_srcTableName" => "admin_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "admin_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "user",
	"m_srcTableName" => "admin_users"
));

$proto8["m_sql"] = "fullname";
$proto8["m_srcTableName"] = "admin_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "admin_users"
));

$proto10["m_sql"] = "username";
$proto10["m_srcTableName"] = "admin_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "admin_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "admin_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "user",
	"m_srcTableName" => "admin_users"
));

$proto14["m_sql"] = "password";
$proto14["m_srcTableName"] = "admin_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "user",
	"m_srcTableName" => "admin_users"
));

$proto16["m_sql"] = "created_at";
$proto16["m_srcTableName"] = "admin_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "user";
$proto19["m_srcTableName"] = "admin_users";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "fullname";
$proto19["m_columns"][] = "username";
$proto19["m_columns"][] = "email";
$proto19["m_columns"][] = "password";
$proto19["m_columns"][] = "created_at";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`user`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "admin_users";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_users = createSqlQuery_admin_users();


	
		;

																		

$tdataadmin_users[".sqlquery"] = $queryData_admin_users;

$tableEvents["admin_users"] = new eventsBase;
$tdataadmin_users[".hasEvents"] = false;

?>