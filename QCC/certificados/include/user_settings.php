<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauser = array();
	$tdatauser[".truncateText"] = true;
	$tdatauser[".NumberOfChars"] = 80;
	$tdatauser[".ShortName"] = "user";
	$tdatauser[".OwnerID"] = "id";
	$tdatauser[".OriginalTable"] = "user";

//	field labels
$fieldLabelsuser = array();
$fieldToolTipsuser = array();
$pageTitlesuser = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsuser["Spanish"] = array();
	$fieldToolTipsuser["Spanish"] = array();
	$pageTitlesuser["Spanish"] = array();
	$fieldLabelsuser["Spanish"]["id"] = "Id";
	$fieldToolTipsuser["Spanish"]["id"] = "";
	$fieldLabelsuser["Spanish"]["fullname"] = "Nombre Completo";
	$fieldToolTipsuser["Spanish"]["fullname"] = "";
	$fieldLabelsuser["Spanish"]["username"] = "Nombre de Usuario";
	$fieldToolTipsuser["Spanish"]["username"] = "";
	$fieldLabelsuser["Spanish"]["email"] = "Email";
	$fieldToolTipsuser["Spanish"]["email"] = "";
	$fieldLabelsuser["Spanish"]["password"] = "Password";
	$fieldToolTipsuser["Spanish"]["password"] = "";
	$fieldLabelsuser["Spanish"]["created_at"] = "Fecha de Creacion";
	$fieldToolTipsuser["Spanish"]["created_at"] = "";
	if (count($fieldToolTipsuser["Spanish"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsuser["Chinese"] = array();
	$fieldToolTipsuser["Chinese"] = array();
	$pageTitlesuser["Chinese"] = array();
	$fieldLabelsuser["Chinese"]["id"] = "Id";
	$fieldToolTipsuser["Chinese"]["id"] = "";
	$fieldLabelsuser["Chinese"]["fullname"] = "Fullname";
	$fieldToolTipsuser["Chinese"]["fullname"] = "";
	$fieldLabelsuser["Chinese"]["username"] = "Username";
	$fieldToolTipsuser["Chinese"]["username"] = "";
	$fieldLabelsuser["Chinese"]["email"] = "Email";
	$fieldToolTipsuser["Chinese"]["email"] = "";
	$fieldLabelsuser["Chinese"]["password"] = "Password";
	$fieldToolTipsuser["Chinese"]["password"] = "";
	$fieldLabelsuser["Chinese"]["created_at"] = "Created At";
	$fieldToolTipsuser["Chinese"]["created_at"] = "";
	if (count($fieldToolTipsuser["Chinese"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese (Hong Kong S.A.R.)")
{
	$fieldLabelsuser["Chinese (Hong Kong S.A.R.)"] = array();
	$fieldToolTipsuser["Chinese (Hong Kong S.A.R.)"] = array();
	$pageTitlesuser["Chinese (Hong Kong S.A.R.)"] = array();
	$fieldLabelsuser["Chinese (Hong Kong S.A.R.)"]["id"] = "Id";
	$fieldToolTipsuser["Chinese (Hong Kong S.A.R.)"]["id"] = "";
	$fieldLabelsuser["Chinese (Hong Kong S.A.R.)"]["fullname"] = "Fullname";
	$fieldToolTipsuser["Chinese (Hong Kong S.A.R.)"]["fullname"] = "";
	$fieldLabelsuser["Chinese (Hong Kong S.A.R.)"]["username"] = "Username";
	$fieldToolTipsuser["Chinese (Hong Kong S.A.R.)"]["username"] = "";
	$fieldLabelsuser["Chinese (Hong Kong S.A.R.)"]["email"] = "Email";
	$fieldToolTipsuser["Chinese (Hong Kong S.A.R.)"]["email"] = "";
	$fieldLabelsuser["Chinese (Hong Kong S.A.R.)"]["password"] = "Password";
	$fieldToolTipsuser["Chinese (Hong Kong S.A.R.)"]["password"] = "";
	$fieldLabelsuser["Chinese (Hong Kong S.A.R.)"]["created_at"] = "Created At";
	$fieldToolTipsuser["Chinese (Hong Kong S.A.R.)"]["created_at"] = "";
	if (count($fieldToolTipsuser["Chinese (Hong Kong S.A.R.)"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese (Taiwan)")
{
	$fieldLabelsuser["Chinese (Taiwan)"] = array();
	$fieldToolTipsuser["Chinese (Taiwan)"] = array();
	$pageTitlesuser["Chinese (Taiwan)"] = array();
	$fieldLabelsuser["Chinese (Taiwan)"]["id"] = "Id";
	$fieldToolTipsuser["Chinese (Taiwan)"]["id"] = "";
	$fieldLabelsuser["Chinese (Taiwan)"]["fullname"] = "Fullname";
	$fieldToolTipsuser["Chinese (Taiwan)"]["fullname"] = "";
	$fieldLabelsuser["Chinese (Taiwan)"]["username"] = "Username";
	$fieldToolTipsuser["Chinese (Taiwan)"]["username"] = "";
	$fieldLabelsuser["Chinese (Taiwan)"]["email"] = "Email";
	$fieldToolTipsuser["Chinese (Taiwan)"]["email"] = "";
	$fieldLabelsuser["Chinese (Taiwan)"]["password"] = "Password";
	$fieldToolTipsuser["Chinese (Taiwan)"]["password"] = "";
	$fieldLabelsuser["Chinese (Taiwan)"]["created_at"] = "Created At";
	$fieldToolTipsuser["Chinese (Taiwan)"]["created_at"] = "";
	if (count($fieldToolTipsuser["Chinese (Taiwan)"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Czech")
{
	$fieldLabelsuser["Czech"] = array();
	$fieldToolTipsuser["Czech"] = array();
	$pageTitlesuser["Czech"] = array();
	$fieldLabelsuser["Czech"]["id"] = "Id";
	$fieldToolTipsuser["Czech"]["id"] = "";
	$fieldLabelsuser["Czech"]["fullname"] = "Fullname";
	$fieldToolTipsuser["Czech"]["fullname"] = "";
	$fieldLabelsuser["Czech"]["username"] = "Username";
	$fieldToolTipsuser["Czech"]["username"] = "";
	$fieldLabelsuser["Czech"]["email"] = "Email";
	$fieldToolTipsuser["Czech"]["email"] = "";
	$fieldLabelsuser["Czech"]["password"] = "Password";
	$fieldToolTipsuser["Czech"]["password"] = "";
	$fieldLabelsuser["Czech"]["created_at"] = "Created At";
	$fieldToolTipsuser["Czech"]["created_at"] = "";
	if (count($fieldToolTipsuser["Czech"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Danish")
{
	$fieldLabelsuser["Danish"] = array();
	$fieldToolTipsuser["Danish"] = array();
	$pageTitlesuser["Danish"] = array();
	$fieldLabelsuser["Danish"]["id"] = "Id";
	$fieldToolTipsuser["Danish"]["id"] = "";
	$fieldLabelsuser["Danish"]["fullname"] = "Fullname";
	$fieldToolTipsuser["Danish"]["fullname"] = "";
	$fieldLabelsuser["Danish"]["username"] = "Username";
	$fieldToolTipsuser["Danish"]["username"] = "";
	$fieldLabelsuser["Danish"]["email"] = "Email";
	$fieldToolTipsuser["Danish"]["email"] = "";
	$fieldLabelsuser["Danish"]["password"] = "Password";
	$fieldToolTipsuser["Danish"]["password"] = "";
	$fieldLabelsuser["Danish"]["created_at"] = "Created At";
	$fieldToolTipsuser["Danish"]["created_at"] = "";
	if (count($fieldToolTipsuser["Danish"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Dutch")
{
	$fieldLabelsuser["Dutch"] = array();
	$fieldToolTipsuser["Dutch"] = array();
	$pageTitlesuser["Dutch"] = array();
	$fieldLabelsuser["Dutch"]["id"] = "Id";
	$fieldToolTipsuser["Dutch"]["id"] = "";
	$fieldLabelsuser["Dutch"]["fullname"] = "Fullname";
	$fieldToolTipsuser["Dutch"]["fullname"] = "";
	$fieldLabelsuser["Dutch"]["username"] = "Username";
	$fieldToolTipsuser["Dutch"]["username"] = "";
	$fieldLabelsuser["Dutch"]["email"] = "Email";
	$fieldToolTipsuser["Dutch"]["email"] = "";
	$fieldLabelsuser["Dutch"]["password"] = "Password";
	$fieldToolTipsuser["Dutch"]["password"] = "";
	$fieldLabelsuser["Dutch"]["created_at"] = "Created At";
	$fieldToolTipsuser["Dutch"]["created_at"] = "";
	if (count($fieldToolTipsuser["Dutch"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser["English"] = array();
	$fieldToolTipsuser["English"] = array();
	$pageTitlesuser["English"] = array();
	$fieldLabelsuser["English"]["id"] = "Id";
	$fieldToolTipsuser["English"]["id"] = "";
	$fieldLabelsuser["English"]["fullname"] = "Fullname";
	$fieldToolTipsuser["English"]["fullname"] = "";
	$fieldLabelsuser["English"]["username"] = "Username";
	$fieldToolTipsuser["English"]["username"] = "";
	$fieldLabelsuser["English"]["email"] = "Email";
	$fieldToolTipsuser["English"]["email"] = "";
	$fieldLabelsuser["English"]["password"] = "Password";
	$fieldToolTipsuser["English"]["password"] = "";
	$fieldLabelsuser["English"]["created_at"] = "Created At";
	$fieldToolTipsuser["English"]["created_at"] = "";
	if (count($fieldToolTipsuser["English"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsuser["French"] = array();
	$fieldToolTipsuser["French"] = array();
	$pageTitlesuser["French"] = array();
	$fieldLabelsuser["French"]["id"] = "Id";
	$fieldToolTipsuser["French"]["id"] = "";
	$fieldLabelsuser["French"]["fullname"] = "Fullname";
	$fieldToolTipsuser["French"]["fullname"] = "";
	$fieldLabelsuser["French"]["username"] = "Username";
	$fieldToolTipsuser["French"]["username"] = "";
	$fieldLabelsuser["French"]["email"] = "Email";
	$fieldToolTipsuser["French"]["email"] = "";
	$fieldLabelsuser["French"]["password"] = "Password";
	$fieldToolTipsuser["French"]["password"] = "";
	$fieldLabelsuser["French"]["created_at"] = "Created At";
	$fieldToolTipsuser["French"]["created_at"] = "";
	if (count($fieldToolTipsuser["French"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsuser["German"] = array();
	$fieldToolTipsuser["German"] = array();
	$pageTitlesuser["German"] = array();
	$fieldLabelsuser["German"]["id"] = "Id";
	$fieldToolTipsuser["German"]["id"] = "";
	$fieldLabelsuser["German"]["fullname"] = "Fullname";
	$fieldToolTipsuser["German"]["fullname"] = "";
	$fieldLabelsuser["German"]["username"] = "Username";
	$fieldToolTipsuser["German"]["username"] = "";
	$fieldLabelsuser["German"]["email"] = "Email";
	$fieldToolTipsuser["German"]["email"] = "";
	$fieldLabelsuser["German"]["password"] = "Password";
	$fieldToolTipsuser["German"]["password"] = "";
	$fieldLabelsuser["German"]["created_at"] = "Created At";
	$fieldToolTipsuser["German"]["created_at"] = "";
	if (count($fieldToolTipsuser["German"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Hebrew")
{
	$fieldLabelsuser["Hebrew"] = array();
	$fieldToolTipsuser["Hebrew"] = array();
	$pageTitlesuser["Hebrew"] = array();
	$fieldLabelsuser["Hebrew"]["id"] = "Id";
	$fieldToolTipsuser["Hebrew"]["id"] = "";
	$fieldLabelsuser["Hebrew"]["fullname"] = "Fullname";
	$fieldToolTipsuser["Hebrew"]["fullname"] = "";
	$fieldLabelsuser["Hebrew"]["username"] = "Username";
	$fieldToolTipsuser["Hebrew"]["username"] = "";
	$fieldLabelsuser["Hebrew"]["email"] = "Email";
	$fieldToolTipsuser["Hebrew"]["email"] = "";
	$fieldLabelsuser["Hebrew"]["password"] = "Password";
	$fieldToolTipsuser["Hebrew"]["password"] = "";
	$fieldLabelsuser["Hebrew"]["created_at"] = "Created At";
	$fieldToolTipsuser["Hebrew"]["created_at"] = "";
	if (count($fieldToolTipsuser["Hebrew"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuser[""] = array();
	$fieldToolTipsuser[""] = array();
	$pageTitlesuser[""] = array();
	if (count($fieldToolTipsuser[""]))
		$tdatauser[".isUseToolTips"] = true;
}


	$tdatauser[".NCSearch"] = true;



$tdatauser[".shortTableName"] = "user";
$tdatauser[".nSecOptions"] = 1;
$tdatauser[".recsPerRowPrint"] = 1;
$tdatauser[".mainTableOwnerID"] = "id";
$tdatauser[".moveNext"] = 1;
$tdatauser[".entityType"] = 0;

$tdatauser[".strOriginalTableName"] = "user";

	



$tdatauser[".showAddInPopup"] = false;

$tdatauser[".showEditInPopup"] = false;

$tdatauser[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser[".fieldsForRegister"] = array();
	//Begin register settings
			$tdatauser[".fieldsForRegister"] = array();
$tdatauser[".fieldsForRegister"][] = "username";
			$tdatauser[".fieldsForRegister"][] = "password";
			$tdatauser[".fieldsForRegister"][] = "email";
			$tdatauser[".fieldsForRegister"][] = "fullname";
/*
$tdatauser[".PasswordField"] = "password";
$tdatauser[".UserNameField"] = "username";
*/
//End register settings

$tdatauser[".listAjax"] = false;

	$tdatauser[".audit"] = false;

	$tdatauser[".locking"] = false;

$tdatauser[".edit"] = true;
$tdatauser[".afterEditAction"] = 1;
$tdatauser[".closePopupAfterEdit"] = 1;
$tdatauser[".afterEditActionDetTable"] = "";

$tdatauser[".add"] = true;
$tdatauser[".afterAddAction"] = 1;
$tdatauser[".closePopupAfterAdd"] = 1;
$tdatauser[".afterAddActionDetTable"] = "";

$tdatauser[".list"] = true;

$tdatauser[".view"] = true;

$tdatauser[".import"] = true;

$tdatauser[".exportTo"] = true;

$tdatauser[".printFriendly"] = true;

$tdatauser[".delete"] = true;

$tdatauser[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauser[".searchSaving"] = false;
//

$tdatauser[".showSearchPanel"] = true;
		$tdatauser[".flexibleSearch"] = true;

$tdatauser[".isUseAjaxSuggest"] = true;

$tdatauser[".rowHighlite"] = true;



$tdatauser[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser[".isUseTimeForSearch"] = false;



$tdatauser[".badgeColor"] = "1E90FF";


$tdatauser[".allSearchFields"] = array();
$tdatauser[".filterFields"] = array();
$tdatauser[".requiredSearchFields"] = array();

$tdatauser[".allSearchFields"][] = "id";
	$tdatauser[".allSearchFields"][] = "fullname";
	$tdatauser[".allSearchFields"][] = "username";
	$tdatauser[".allSearchFields"][] = "email";
	$tdatauser[".allSearchFields"][] = "password";
	$tdatauser[".allSearchFields"][] = "created_at";
	

$tdatauser[".googleLikeFields"] = array();
$tdatauser[".googleLikeFields"][] = "id";
$tdatauser[".googleLikeFields"][] = "fullname";
$tdatauser[".googleLikeFields"][] = "username";
$tdatauser[".googleLikeFields"][] = "email";
$tdatauser[".googleLikeFields"][] = "password";
$tdatauser[".googleLikeFields"][] = "created_at";


$tdatauser[".advSearchFields"] = array();
$tdatauser[".advSearchFields"][] = "id";
$tdatauser[".advSearchFields"][] = "fullname";
$tdatauser[".advSearchFields"][] = "username";
$tdatauser[".advSearchFields"][] = "email";
$tdatauser[".advSearchFields"][] = "password";
$tdatauser[".advSearchFields"][] = "created_at";

$tdatauser[".tableType"] = "list";

$tdatauser[".printerPageOrientation"] = 1;
$tdatauser[".nPrinterPageScale"] = 100;

$tdatauser[".nPrinterSplitRecords"] = 40;

$tdatauser[".nPrinterPDFSplitRecords"] = 40;



$tdatauser[".geocodingEnabled"] = false;





$tdatauser[".listGridLayout"] = 3;

$tdatauser[".isDisplayLoading"] = true;

$tdatauser[".isResizeColumns"] = true;


$tdatauser[".noRecordsFirstPage"] = true;

// view page pdf

// print page pdf


$tdatauser[".pageSize"] = 20;

$tdatauser[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser[".strOrderBy"] = $tstrOrderBy;

$tdatauser[".orderindexes"] = array();

$tdatauser[".sqlHead"] = "SELECT id,  	fullname,  	username,  	email,  	password,  	created_at";
$tdatauser[".sqlFrom"] = "FROM `user`";
$tdatauser[".sqlWhereExpr"] = "";
$tdatauser[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser[".arrGroupsPerPage"] = $arrGPP;

$tdatauser[".highlightSearchResults"] = true;

$tableKeysuser = array();
$tableKeysuser[] = "id";
$tdatauser[".Keys"] = $tableKeysuser;

$tdatauser[".listFields"] = array();
$tdatauser[".listFields"][] = "id";
$tdatauser[".listFields"][] = "fullname";
$tdatauser[".listFields"][] = "username";
$tdatauser[".listFields"][] = "email";
$tdatauser[".listFields"][] = "password";
$tdatauser[".listFields"][] = "created_at";

$tdatauser[".hideMobileList"] = array();


$tdatauser[".viewFields"] = array();
$tdatauser[".viewFields"][] = "id";
$tdatauser[".viewFields"][] = "fullname";
$tdatauser[".viewFields"][] = "username";
$tdatauser[".viewFields"][] = "email";
$tdatauser[".viewFields"][] = "password";
$tdatauser[".viewFields"][] = "created_at";

$tdatauser[".addFields"] = array();
$tdatauser[".addFields"][] = "fullname";
$tdatauser[".addFields"][] = "username";
$tdatauser[".addFields"][] = "email";
$tdatauser[".addFields"][] = "password";
$tdatauser[".addFields"][] = "created_at";

$tdatauser[".masterListFields"] = array();
$tdatauser[".masterListFields"][] = "id";
$tdatauser[".masterListFields"][] = "fullname";
$tdatauser[".masterListFields"][] = "username";
$tdatauser[".masterListFields"][] = "email";
$tdatauser[".masterListFields"][] = "password";
$tdatauser[".masterListFields"][] = "created_at";

$tdatauser[".inlineAddFields"] = array();

$tdatauser[".editFields"] = array();
$tdatauser[".editFields"][] = "fullname";
$tdatauser[".editFields"][] = "username";
$tdatauser[".editFields"][] = "email";
$tdatauser[".editFields"][] = "password";
$tdatauser[".editFields"][] = "created_at";

$tdatauser[".inlineEditFields"] = array();

$tdatauser[".exportFields"] = array();
$tdatauser[".exportFields"][] = "id";
$tdatauser[".exportFields"][] = "fullname";
$tdatauser[".exportFields"][] = "username";
$tdatauser[".exportFields"][] = "email";
$tdatauser[".exportFields"][] = "password";
$tdatauser[".exportFields"][] = "created_at";

$tdatauser[".importFields"] = array();
$tdatauser[".importFields"][] = "id";
$tdatauser[".importFields"][] = "fullname";
$tdatauser[".importFields"][] = "username";
$tdatauser[".importFields"][] = "email";
$tdatauser[".importFields"][] = "password";
$tdatauser[".importFields"][] = "created_at";

$tdatauser[".printFields"] = array();
$tdatauser[".printFields"][] = "id";
$tdatauser[".printFields"][] = "fullname";
$tdatauser[".printFields"][] = "username";
$tdatauser[".printFields"][] = "email";
$tdatauser[".printFields"][] = "password";
$tdatauser[".printFields"][] = "created_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","id");
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




	$tdatauser["id"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","fullname");
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




	$tdatauser["fullname"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","username");
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
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatauser["username"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","email");
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

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
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
	
	
						if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatauser["email"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","password");
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

	$edata = array("EditFormat" => "Password");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Password");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatauser["password"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","created_at");
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




	$tdatauser["created_at"] = $fdata;


$tables_data["user"]=&$tdatauser;
$field_labels["user"] = &$fieldLabelsuser;
$fieldToolTips["user"] = &$fieldToolTipsuser;
$page_titles["user"] = &$pageTitlesuser;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["user"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user()
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
	"m_srcTableName" => "user"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "user";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto8["m_sql"] = "fullname";
$proto8["m_srcTableName"] = "user";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto10["m_sql"] = "username";
$proto10["m_srcTableName"] = "user";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "user";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto14["m_sql"] = "password";
$proto14["m_srcTableName"] = "user";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto16["m_sql"] = "created_at";
$proto16["m_srcTableName"] = "user";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "user";
$proto19["m_srcTableName"] = "user";
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
$proto18["m_srcTableName"] = "user";
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
$proto0["m_srcTableName"]="user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user = createSqlQuery_user();


	
		;

						

$tdatauser[".sqlquery"] = $queryData_user;

$tableEvents["user"] = new eventsBase;
$tdatauser[".hasEvents"] = false;

?>