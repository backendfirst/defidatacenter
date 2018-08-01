<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_members = array();
	$tdataadmin_members[".truncateText"] = true;
	$tdataadmin_members[".NumberOfChars"] = 80;
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "id";
	$tdataadmin_members[".OriginalTable"] = "user";

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_members["Spanish"] = array();
	$fieldToolTipsadmin_members["Spanish"] = array();
	$pageTitlesadmin_members["Spanish"] = array();
	$fieldLabelsadmin_members["Spanish"]["id"] = "Id";
	$fieldToolTipsadmin_members["Spanish"]["id"] = "";
	$fieldLabelsadmin_members["Spanish"]["fullname"] = "Nombre Completo";
	$fieldToolTipsadmin_members["Spanish"]["fullname"] = "";
	$fieldLabelsadmin_members["Spanish"]["username"] = "Nombre de Usuario";
	$fieldToolTipsadmin_members["Spanish"]["username"] = "";
	$fieldLabelsadmin_members["Spanish"]["email"] = "Email";
	$fieldToolTipsadmin_members["Spanish"]["email"] = "";
	$fieldLabelsadmin_members["Spanish"]["password"] = "Password";
	$fieldToolTipsadmin_members["Spanish"]["password"] = "";
	$fieldLabelsadmin_members["Spanish"]["created_at"] = "Fecha de Creacion";
	$fieldToolTipsadmin_members["Spanish"]["created_at"] = "";
	if (count($fieldToolTipsadmin_members["Spanish"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsadmin_members["Chinese"] = array();
	$fieldToolTipsadmin_members["Chinese"] = array();
	$pageTitlesadmin_members["Chinese"] = array();
	$fieldLabelsadmin_members["Chinese"]["id"] = "Id";
	$fieldToolTipsadmin_members["Chinese"]["id"] = "";
	$fieldLabelsadmin_members["Chinese"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["Chinese"]["fullname"] = "";
	$fieldLabelsadmin_members["Chinese"]["username"] = "Username";
	$fieldToolTipsadmin_members["Chinese"]["username"] = "";
	$fieldLabelsadmin_members["Chinese"]["email"] = "Email";
	$fieldToolTipsadmin_members["Chinese"]["email"] = "";
	$fieldLabelsadmin_members["Chinese"]["password"] = "Password";
	$fieldToolTipsadmin_members["Chinese"]["password"] = "";
	$fieldLabelsadmin_members["Chinese"]["created_at"] = "Created At";
	$fieldToolTipsadmin_members["Chinese"]["created_at"] = "";
	if (count($fieldToolTipsadmin_members["Chinese"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese (Hong Kong S.A.R.)")
{
	$fieldLabelsadmin_members["Chinese (Hong Kong S.A.R.)"] = array();
	$fieldToolTipsadmin_members["Chinese (Hong Kong S.A.R.)"] = array();
	$pageTitlesadmin_members["Chinese (Hong Kong S.A.R.)"] = array();
	$fieldLabelsadmin_members["Chinese (Hong Kong S.A.R.)"]["id"] = "Id";
	$fieldToolTipsadmin_members["Chinese (Hong Kong S.A.R.)"]["id"] = "";
	$fieldLabelsadmin_members["Chinese (Hong Kong S.A.R.)"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["Chinese (Hong Kong S.A.R.)"]["fullname"] = "";
	$fieldLabelsadmin_members["Chinese (Hong Kong S.A.R.)"]["username"] = "Username";
	$fieldToolTipsadmin_members["Chinese (Hong Kong S.A.R.)"]["username"] = "";
	$fieldLabelsadmin_members["Chinese (Hong Kong S.A.R.)"]["email"] = "Email";
	$fieldToolTipsadmin_members["Chinese (Hong Kong S.A.R.)"]["email"] = "";
	$fieldLabelsadmin_members["Chinese (Hong Kong S.A.R.)"]["password"] = "Password";
	$fieldToolTipsadmin_members["Chinese (Hong Kong S.A.R.)"]["password"] = "";
	$fieldLabelsadmin_members["Chinese (Hong Kong S.A.R.)"]["created_at"] = "Created At";
	$fieldToolTipsadmin_members["Chinese (Hong Kong S.A.R.)"]["created_at"] = "";
	if (count($fieldToolTipsadmin_members["Chinese (Hong Kong S.A.R.)"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese (Taiwan)")
{
	$fieldLabelsadmin_members["Chinese (Taiwan)"] = array();
	$fieldToolTipsadmin_members["Chinese (Taiwan)"] = array();
	$pageTitlesadmin_members["Chinese (Taiwan)"] = array();
	$fieldLabelsadmin_members["Chinese (Taiwan)"]["id"] = "Id";
	$fieldToolTipsadmin_members["Chinese (Taiwan)"]["id"] = "";
	$fieldLabelsadmin_members["Chinese (Taiwan)"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["Chinese (Taiwan)"]["fullname"] = "";
	$fieldLabelsadmin_members["Chinese (Taiwan)"]["username"] = "Username";
	$fieldToolTipsadmin_members["Chinese (Taiwan)"]["username"] = "";
	$fieldLabelsadmin_members["Chinese (Taiwan)"]["email"] = "Email";
	$fieldToolTipsadmin_members["Chinese (Taiwan)"]["email"] = "";
	$fieldLabelsadmin_members["Chinese (Taiwan)"]["password"] = "Password";
	$fieldToolTipsadmin_members["Chinese (Taiwan)"]["password"] = "";
	$fieldLabelsadmin_members["Chinese (Taiwan)"]["created_at"] = "Created At";
	$fieldToolTipsadmin_members["Chinese (Taiwan)"]["created_at"] = "";
	if (count($fieldToolTipsadmin_members["Chinese (Taiwan)"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Czech")
{
	$fieldLabelsadmin_members["Czech"] = array();
	$fieldToolTipsadmin_members["Czech"] = array();
	$pageTitlesadmin_members["Czech"] = array();
	$fieldLabelsadmin_members["Czech"]["id"] = "Id";
	$fieldToolTipsadmin_members["Czech"]["id"] = "";
	$fieldLabelsadmin_members["Czech"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["Czech"]["fullname"] = "";
	$fieldLabelsadmin_members["Czech"]["username"] = "Username";
	$fieldToolTipsadmin_members["Czech"]["username"] = "";
	$fieldLabelsadmin_members["Czech"]["email"] = "Email";
	$fieldToolTipsadmin_members["Czech"]["email"] = "";
	$fieldLabelsadmin_members["Czech"]["password"] = "Password";
	$fieldToolTipsadmin_members["Czech"]["password"] = "";
	$fieldLabelsadmin_members["Czech"]["created_at"] = "Created At";
	$fieldToolTipsadmin_members["Czech"]["created_at"] = "";
	if (count($fieldToolTipsadmin_members["Czech"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Danish")
{
	$fieldLabelsadmin_members["Danish"] = array();
	$fieldToolTipsadmin_members["Danish"] = array();
	$pageTitlesadmin_members["Danish"] = array();
	$fieldLabelsadmin_members["Danish"]["id"] = "Id";
	$fieldToolTipsadmin_members["Danish"]["id"] = "";
	$fieldLabelsadmin_members["Danish"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["Danish"]["fullname"] = "";
	$fieldLabelsadmin_members["Danish"]["username"] = "Username";
	$fieldToolTipsadmin_members["Danish"]["username"] = "";
	$fieldLabelsadmin_members["Danish"]["email"] = "Email";
	$fieldToolTipsadmin_members["Danish"]["email"] = "";
	$fieldLabelsadmin_members["Danish"]["password"] = "Password";
	$fieldToolTipsadmin_members["Danish"]["password"] = "";
	$fieldLabelsadmin_members["Danish"]["created_at"] = "Created At";
	$fieldToolTipsadmin_members["Danish"]["created_at"] = "";
	if (count($fieldToolTipsadmin_members["Danish"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Dutch")
{
	$fieldLabelsadmin_members["Dutch"] = array();
	$fieldToolTipsadmin_members["Dutch"] = array();
	$pageTitlesadmin_members["Dutch"] = array();
	$fieldLabelsadmin_members["Dutch"]["id"] = "Id";
	$fieldToolTipsadmin_members["Dutch"]["id"] = "";
	$fieldLabelsadmin_members["Dutch"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["Dutch"]["fullname"] = "";
	$fieldLabelsadmin_members["Dutch"]["username"] = "Username";
	$fieldToolTipsadmin_members["Dutch"]["username"] = "";
	$fieldLabelsadmin_members["Dutch"]["email"] = "Email";
	$fieldToolTipsadmin_members["Dutch"]["email"] = "";
	$fieldLabelsadmin_members["Dutch"]["password"] = "Password";
	$fieldToolTipsadmin_members["Dutch"]["password"] = "";
	$fieldLabelsadmin_members["Dutch"]["created_at"] = "Created At";
	$fieldToolTipsadmin_members["Dutch"]["created_at"] = "";
	if (count($fieldToolTipsadmin_members["Dutch"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["id"] = "Id";
	$fieldToolTipsadmin_members["English"]["id"] = "";
	$fieldLabelsadmin_members["English"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["English"]["fullname"] = "";
	$fieldLabelsadmin_members["English"]["username"] = "Username";
	$fieldToolTipsadmin_members["English"]["username"] = "";
	$fieldLabelsadmin_members["English"]["email"] = "Email";
	$fieldToolTipsadmin_members["English"]["email"] = "";
	$fieldLabelsadmin_members["English"]["password"] = "Password";
	$fieldToolTipsadmin_members["English"]["password"] = "";
	$fieldLabelsadmin_members["English"]["created_at"] = "Created At";
	$fieldToolTipsadmin_members["English"]["created_at"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsadmin_members["French"] = array();
	$fieldToolTipsadmin_members["French"] = array();
	$pageTitlesadmin_members["French"] = array();
	$fieldLabelsadmin_members["French"]["id"] = "Id";
	$fieldToolTipsadmin_members["French"]["id"] = "";
	$fieldLabelsadmin_members["French"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["French"]["fullname"] = "";
	$fieldLabelsadmin_members["French"]["username"] = "Username";
	$fieldToolTipsadmin_members["French"]["username"] = "";
	$fieldLabelsadmin_members["French"]["email"] = "Email";
	$fieldToolTipsadmin_members["French"]["email"] = "";
	$fieldLabelsadmin_members["French"]["password"] = "Password";
	$fieldToolTipsadmin_members["French"]["password"] = "";
	$fieldLabelsadmin_members["French"]["created_at"] = "Created At";
	$fieldToolTipsadmin_members["French"]["created_at"] = "";
	if (count($fieldToolTipsadmin_members["French"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsadmin_members["German"] = array();
	$fieldToolTipsadmin_members["German"] = array();
	$pageTitlesadmin_members["German"] = array();
	$fieldLabelsadmin_members["German"]["id"] = "Id";
	$fieldToolTipsadmin_members["German"]["id"] = "";
	$fieldLabelsadmin_members["German"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["German"]["fullname"] = "";
	$fieldLabelsadmin_members["German"]["username"] = "Username";
	$fieldToolTipsadmin_members["German"]["username"] = "";
	$fieldLabelsadmin_members["German"]["email"] = "Email";
	$fieldToolTipsadmin_members["German"]["email"] = "";
	$fieldLabelsadmin_members["German"]["password"] = "Password";
	$fieldToolTipsadmin_members["German"]["password"] = "";
	$fieldLabelsadmin_members["German"]["created_at"] = "Created At";
	$fieldToolTipsadmin_members["German"]["created_at"] = "";
	if (count($fieldToolTipsadmin_members["German"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Hebrew")
{
	$fieldLabelsadmin_members["Hebrew"] = array();
	$fieldToolTipsadmin_members["Hebrew"] = array();
	$pageTitlesadmin_members["Hebrew"] = array();
	$fieldLabelsadmin_members["Hebrew"]["id"] = "Id";
	$fieldToolTipsadmin_members["Hebrew"]["id"] = "";
	$fieldLabelsadmin_members["Hebrew"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["Hebrew"]["fullname"] = "";
	$fieldLabelsadmin_members["Hebrew"]["username"] = "Username";
	$fieldToolTipsadmin_members["Hebrew"]["username"] = "";
	$fieldLabelsadmin_members["Hebrew"]["email"] = "Email";
	$fieldToolTipsadmin_members["Hebrew"]["email"] = "";
	$fieldLabelsadmin_members["Hebrew"]["password"] = "Password";
	$fieldToolTipsadmin_members["Hebrew"]["password"] = "";
	$fieldLabelsadmin_members["Hebrew"]["created_at"] = "Created At";
	$fieldToolTipsadmin_members["Hebrew"]["created_at"] = "";
	if (count($fieldToolTipsadmin_members["Hebrew"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_members[""] = array();
	$fieldToolTipsadmin_members[""] = array();
	$pageTitlesadmin_members[""] = array();
	if (count($fieldToolTipsadmin_members[""]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 1;
$tdataadmin_members[".recsPerRowPrint"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "id";
$tdataadmin_members[".moveNext"] = 1;
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "user";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".fieldsForRegister"] = array();
	
$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = true;

	$tdataadmin_members[".locking"] = false;









$tdataadmin_members[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataadmin_members[".searchSaving"] = false;
//

$tdataadmin_members[".showSearchPanel"] = true;
		$tdataadmin_members[".flexibleSearch"] = true;

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;



$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;



$tdataadmin_members[".badgeColor"] = "1E90FF";


$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".allSearchFields"][] = "id";
	$tdataadmin_members[".allSearchFields"][] = "fullname";
	$tdataadmin_members[".allSearchFields"][] = "username";
	$tdataadmin_members[".allSearchFields"][] = "email";
	$tdataadmin_members[".allSearchFields"][] = "password";
	$tdataadmin_members[".allSearchFields"][] = "created_at";
	

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "id";
$tdataadmin_members[".googleLikeFields"][] = "fullname";
$tdataadmin_members[".googleLikeFields"][] = "username";
$tdataadmin_members[".googleLikeFields"][] = "email";
$tdataadmin_members[".googleLikeFields"][] = "password";
$tdataadmin_members[".googleLikeFields"][] = "created_at";


$tdataadmin_members[".advSearchFields"] = array();
$tdataadmin_members[".advSearchFields"][] = "id";
$tdataadmin_members[".advSearchFields"][] = "fullname";
$tdataadmin_members[".advSearchFields"][] = "username";
$tdataadmin_members[".advSearchFields"][] = "email";
$tdataadmin_members[".advSearchFields"][] = "password";
$tdataadmin_members[".advSearchFields"][] = "created_at";

$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_members[".geocodingEnabled"] = false;





$tdataadmin_members[".listGridLayout"] = 3;

$tdataadmin_members[".isDisplayLoading"] = true;



$tdataadmin_members[".noRecordsFirstPage"] = true;

// view page pdf

// print page pdf


$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT id,  	fullname,  	username,  	email,  	password,  	created_at";
$tdataadmin_members[".sqlFrom"] = "FROM `user`";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "id";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "id";
$tdataadmin_members[".listFields"][] = "fullname";
$tdataadmin_members[".listFields"][] = "username";
$tdataadmin_members[".listFields"][] = "email";
$tdataadmin_members[".listFields"][] = "password";
$tdataadmin_members[".listFields"][] = "created_at";

$tdataadmin_members[".hideMobileList"] = array();


$tdataadmin_members[".viewFields"] = array();
$tdataadmin_members[".viewFields"][] = "id";
$tdataadmin_members[".viewFields"][] = "fullname";
$tdataadmin_members[".viewFields"][] = "username";
$tdataadmin_members[".viewFields"][] = "email";
$tdataadmin_members[".viewFields"][] = "password";
$tdataadmin_members[".viewFields"][] = "created_at";

$tdataadmin_members[".addFields"] = array();
$tdataadmin_members[".addFields"][] = "fullname";
$tdataadmin_members[".addFields"][] = "username";
$tdataadmin_members[".addFields"][] = "email";
$tdataadmin_members[".addFields"][] = "password";
$tdataadmin_members[".addFields"][] = "created_at";

$tdataadmin_members[".masterListFields"] = array();
$tdataadmin_members[".masterListFields"][] = "id";
$tdataadmin_members[".masterListFields"][] = "fullname";
$tdataadmin_members[".masterListFields"][] = "username";
$tdataadmin_members[".masterListFields"][] = "email";
$tdataadmin_members[".masterListFields"][] = "password";
$tdataadmin_members[".masterListFields"][] = "created_at";

$tdataadmin_members[".inlineAddFields"] = array();

$tdataadmin_members[".editFields"] = array();
$tdataadmin_members[".editFields"][] = "fullname";
$tdataadmin_members[".editFields"][] = "username";
$tdataadmin_members[".editFields"][] = "email";
$tdataadmin_members[".editFields"][] = "password";
$tdataadmin_members[".editFields"][] = "created_at";

$tdataadmin_members[".inlineEditFields"] = array();

$tdataadmin_members[".exportFields"] = array();
$tdataadmin_members[".exportFields"][] = "id";
$tdataadmin_members[".exportFields"][] = "fullname";
$tdataadmin_members[".exportFields"][] = "username";
$tdataadmin_members[".exportFields"][] = "email";
$tdataadmin_members[".exportFields"][] = "password";
$tdataadmin_members[".exportFields"][] = "created_at";

$tdataadmin_members[".importFields"] = array();
$tdataadmin_members[".importFields"][] = "id";
$tdataadmin_members[".importFields"][] = "fullname";
$tdataadmin_members[".importFields"][] = "username";
$tdataadmin_members[".importFields"][] = "email";
$tdataadmin_members[".importFields"][] = "password";
$tdataadmin_members[".importFields"][] = "created_at";

$tdataadmin_members[".printFields"] = array();
$tdataadmin_members[".printFields"][] = "id";
$tdataadmin_members[".printFields"][] = "fullname";
$tdataadmin_members[".printFields"][] = "username";
$tdataadmin_members[".printFields"][] = "email";
$tdataadmin_members[".printFields"][] = "password";
$tdataadmin_members[".printFields"][] = "created_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_members","id");
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




	$tdataadmin_members["id"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_members","fullname");
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




	$tdataadmin_members["fullname"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_members","username");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["username"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_members","email");
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




	$tdataadmin_members["email"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_members","password");
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




	$tdataadmin_members["password"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("admin_members","created_at");
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




	$tdataadmin_members["created_at"] = $fdata;


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
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
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "user",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "fullname";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "username";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "user",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "password";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "user",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "created_at";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "user";
$proto19["m_srcTableName"] = "admin_members";
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
$proto18["m_srcTableName"] = "admin_members";
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
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
		;

						

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>