<?php
require_once(getabspath("classes/cipherer.php"));




$tdataclientes = array();
	$tdataclientes[".truncateText"] = true;
	$tdataclientes[".NumberOfChars"] = 80;
	$tdataclientes[".ShortName"] = "clientes";
	$tdataclientes[".OwnerID"] = "";
	$tdataclientes[".OriginalTable"] = "clientes";

//	field labels
$fieldLabelsclientes = array();
$fieldToolTipsclientes = array();
$pageTitlesclientes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsclientes["Spanish"] = array();
	$fieldToolTipsclientes["Spanish"] = array();
	$pageTitlesclientes["Spanish"] = array();
	$fieldLabelsclientes["Spanish"]["id"] = "Id";
	$fieldToolTipsclientes["Spanish"]["id"] = "";
	$fieldLabelsclientes["Spanish"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["Spanish"]["cliente"] = "";
	$fieldLabelsclientes["Spanish"]["roc"] = "Roc";
	$fieldToolTipsclientes["Spanish"]["roc"] = "";
	$fieldLabelsclientes["Spanish"]["norma"] = "Norma";
	$fieldToolTipsclientes["Spanish"]["norma"] = "";
	$fieldLabelsclientes["Spanish"]["estatus"] = "Estatus";
	$fieldToolTipsclientes["Spanish"]["estatus"] = "";
	$fieldLabelsclientes["Spanish"]["sector"] = "Sector";
	$fieldToolTipsclientes["Spanish"]["sector"] = "";
	if (count($fieldToolTipsclientes["Spanish"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese")
{
	$fieldLabelsclientes["Chinese"] = array();
	$fieldToolTipsclientes["Chinese"] = array();
	$pageTitlesclientes["Chinese"] = array();
	$fieldLabelsclientes["Chinese"]["id"] = "Id";
	$fieldToolTipsclientes["Chinese"]["id"] = "";
	$fieldLabelsclientes["Chinese"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["Chinese"]["cliente"] = "";
	$fieldLabelsclientes["Chinese"]["roc"] = "Roc";
	$fieldToolTipsclientes["Chinese"]["roc"] = "";
	$fieldLabelsclientes["Chinese"]["norma"] = "Norma";
	$fieldToolTipsclientes["Chinese"]["norma"] = "";
	$fieldLabelsclientes["Chinese"]["estatus"] = "Estatus";
	$fieldToolTipsclientes["Chinese"]["estatus"] = "";
	$fieldLabelsclientes["Chinese"]["sector"] = "Sector";
	$fieldToolTipsclientes["Chinese"]["sector"] = "";
	if (count($fieldToolTipsclientes["Chinese"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese (Hong Kong S.A.R.)")
{
	$fieldLabelsclientes["Chinese (Hong Kong S.A.R.)"] = array();
	$fieldToolTipsclientes["Chinese (Hong Kong S.A.R.)"] = array();
	$pageTitlesclientes["Chinese (Hong Kong S.A.R.)"] = array();
	$fieldLabelsclientes["Chinese (Hong Kong S.A.R.)"]["id"] = "Id";
	$fieldToolTipsclientes["Chinese (Hong Kong S.A.R.)"]["id"] = "";
	$fieldLabelsclientes["Chinese (Hong Kong S.A.R.)"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["Chinese (Hong Kong S.A.R.)"]["cliente"] = "";
	$fieldLabelsclientes["Chinese (Hong Kong S.A.R.)"]["roc"] = "Roc";
	$fieldToolTipsclientes["Chinese (Hong Kong S.A.R.)"]["roc"] = "";
	$fieldLabelsclientes["Chinese (Hong Kong S.A.R.)"]["norma"] = "Norma";
	$fieldToolTipsclientes["Chinese (Hong Kong S.A.R.)"]["norma"] = "";
	$fieldLabelsclientes["Chinese (Hong Kong S.A.R.)"]["estatus"] = "Estatus";
	$fieldToolTipsclientes["Chinese (Hong Kong S.A.R.)"]["estatus"] = "";
	$fieldLabelsclientes["Chinese (Hong Kong S.A.R.)"]["sector"] = "Sector";
	$fieldToolTipsclientes["Chinese (Hong Kong S.A.R.)"]["sector"] = "";
	if (count($fieldToolTipsclientes["Chinese (Hong Kong S.A.R.)"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Chinese (Taiwan)")
{
	$fieldLabelsclientes["Chinese (Taiwan)"] = array();
	$fieldToolTipsclientes["Chinese (Taiwan)"] = array();
	$pageTitlesclientes["Chinese (Taiwan)"] = array();
	$fieldLabelsclientes["Chinese (Taiwan)"]["id"] = "Id";
	$fieldToolTipsclientes["Chinese (Taiwan)"]["id"] = "";
	$fieldLabelsclientes["Chinese (Taiwan)"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["Chinese (Taiwan)"]["cliente"] = "";
	$fieldLabelsclientes["Chinese (Taiwan)"]["roc"] = "Roc";
	$fieldToolTipsclientes["Chinese (Taiwan)"]["roc"] = "";
	$fieldLabelsclientes["Chinese (Taiwan)"]["norma"] = "Norma";
	$fieldToolTipsclientes["Chinese (Taiwan)"]["norma"] = "";
	$fieldLabelsclientes["Chinese (Taiwan)"]["estatus"] = "Estatus";
	$fieldToolTipsclientes["Chinese (Taiwan)"]["estatus"] = "";
	$fieldLabelsclientes["Chinese (Taiwan)"]["sector"] = "Sector";
	$fieldToolTipsclientes["Chinese (Taiwan)"]["sector"] = "";
	if (count($fieldToolTipsclientes["Chinese (Taiwan)"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Czech")
{
	$fieldLabelsclientes["Czech"] = array();
	$fieldToolTipsclientes["Czech"] = array();
	$pageTitlesclientes["Czech"] = array();
	$fieldLabelsclientes["Czech"]["id"] = "Id";
	$fieldToolTipsclientes["Czech"]["id"] = "";
	$fieldLabelsclientes["Czech"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["Czech"]["cliente"] = "";
	$fieldLabelsclientes["Czech"]["roc"] = "Roc";
	$fieldToolTipsclientes["Czech"]["roc"] = "";
	$fieldLabelsclientes["Czech"]["norma"] = "Norma";
	$fieldToolTipsclientes["Czech"]["norma"] = "";
	$fieldLabelsclientes["Czech"]["estatus"] = "Estatus";
	$fieldToolTipsclientes["Czech"]["estatus"] = "";
	$fieldLabelsclientes["Czech"]["sector"] = "Sector";
	$fieldToolTipsclientes["Czech"]["sector"] = "";
	if (count($fieldToolTipsclientes["Czech"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Danish")
{
	$fieldLabelsclientes["Danish"] = array();
	$fieldToolTipsclientes["Danish"] = array();
	$pageTitlesclientes["Danish"] = array();
	$fieldLabelsclientes["Danish"]["id"] = "Id";
	$fieldToolTipsclientes["Danish"]["id"] = "";
	$fieldLabelsclientes["Danish"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["Danish"]["cliente"] = "";
	$fieldLabelsclientes["Danish"]["roc"] = "Roc";
	$fieldToolTipsclientes["Danish"]["roc"] = "";
	$fieldLabelsclientes["Danish"]["norma"] = "Norma";
	$fieldToolTipsclientes["Danish"]["norma"] = "";
	$fieldLabelsclientes["Danish"]["estatus"] = "Estatus";
	$fieldToolTipsclientes["Danish"]["estatus"] = "";
	$fieldLabelsclientes["Danish"]["sector"] = "Sector";
	$fieldToolTipsclientes["Danish"]["sector"] = "";
	if (count($fieldToolTipsclientes["Danish"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Dutch")
{
	$fieldLabelsclientes["Dutch"] = array();
	$fieldToolTipsclientes["Dutch"] = array();
	$pageTitlesclientes["Dutch"] = array();
	$fieldLabelsclientes["Dutch"]["id"] = "Id";
	$fieldToolTipsclientes["Dutch"]["id"] = "";
	$fieldLabelsclientes["Dutch"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["Dutch"]["cliente"] = "";
	$fieldLabelsclientes["Dutch"]["roc"] = "Roc";
	$fieldToolTipsclientes["Dutch"]["roc"] = "";
	$fieldLabelsclientes["Dutch"]["norma"] = "Norma";
	$fieldToolTipsclientes["Dutch"]["norma"] = "";
	$fieldLabelsclientes["Dutch"]["estatus"] = "Estatus";
	$fieldToolTipsclientes["Dutch"]["estatus"] = "";
	$fieldLabelsclientes["Dutch"]["sector"] = "Sector";
	$fieldToolTipsclientes["Dutch"]["sector"] = "";
	if (count($fieldToolTipsclientes["Dutch"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsclientes["English"] = array();
	$fieldToolTipsclientes["English"] = array();
	$pageTitlesclientes["English"] = array();
	$fieldLabelsclientes["English"]["id"] = "Id";
	$fieldToolTipsclientes["English"]["id"] = "";
	$fieldLabelsclientes["English"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["English"]["cliente"] = "";
	$fieldLabelsclientes["English"]["roc"] = "Roc";
	$fieldToolTipsclientes["English"]["roc"] = "";
	$fieldLabelsclientes["English"]["norma"] = "Norma";
	$fieldToolTipsclientes["English"]["norma"] = "";
	$fieldLabelsclientes["English"]["estatus"] = "Estatus";
	$fieldToolTipsclientes["English"]["estatus"] = "";
	$fieldLabelsclientes["English"]["sector"] = "Sector";
	$fieldToolTipsclientes["English"]["sector"] = "";
	if (count($fieldToolTipsclientes["English"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsclientes["French"] = array();
	$fieldToolTipsclientes["French"] = array();
	$pageTitlesclientes["French"] = array();
	$fieldLabelsclientes["French"]["id"] = "Id";
	$fieldToolTipsclientes["French"]["id"] = "";
	$fieldLabelsclientes["French"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["French"]["cliente"] = "";
	$fieldLabelsclientes["French"]["roc"] = "Roc";
	$fieldToolTipsclientes["French"]["roc"] = "";
	$fieldLabelsclientes["French"]["norma"] = "Norma";
	$fieldToolTipsclientes["French"]["norma"] = "";
	$fieldLabelsclientes["French"]["estatus"] = "Estatus";
	$fieldToolTipsclientes["French"]["estatus"] = "";
	$fieldLabelsclientes["French"]["sector"] = "Sector";
	$fieldToolTipsclientes["French"]["sector"] = "";
	if (count($fieldToolTipsclientes["French"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsclientes["German"] = array();
	$fieldToolTipsclientes["German"] = array();
	$pageTitlesclientes["German"] = array();
	$fieldLabelsclientes["German"]["id"] = "Id";
	$fieldToolTipsclientes["German"]["id"] = "";
	$fieldLabelsclientes["German"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["German"]["cliente"] = "";
	$fieldLabelsclientes["German"]["roc"] = "Roc";
	$fieldToolTipsclientes["German"]["roc"] = "";
	$fieldLabelsclientes["German"]["norma"] = "Norma";
	$fieldToolTipsclientes["German"]["norma"] = "";
	$fieldLabelsclientes["German"]["estatus"] = "Estatus";
	$fieldToolTipsclientes["German"]["estatus"] = "";
	$fieldLabelsclientes["German"]["sector"] = "Sector";
	$fieldToolTipsclientes["German"]["sector"] = "";
	if (count($fieldToolTipsclientes["German"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Hebrew")
{
	$fieldLabelsclientes["Hebrew"] = array();
	$fieldToolTipsclientes["Hebrew"] = array();
	$pageTitlesclientes["Hebrew"] = array();
	$fieldLabelsclientes["Hebrew"]["id"] = "Id";
	$fieldToolTipsclientes["Hebrew"]["id"] = "";
	$fieldLabelsclientes["Hebrew"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["Hebrew"]["cliente"] = "";
	$fieldLabelsclientes["Hebrew"]["roc"] = "Roc";
	$fieldToolTipsclientes["Hebrew"]["roc"] = "";
	$fieldLabelsclientes["Hebrew"]["norma"] = "Norma";
	$fieldToolTipsclientes["Hebrew"]["norma"] = "";
	$fieldLabelsclientes["Hebrew"]["estatus"] = "Estatus";
	$fieldToolTipsclientes["Hebrew"]["estatus"] = "";
	$fieldLabelsclientes["Hebrew"]["sector"] = "Sector";
	$fieldToolTipsclientes["Hebrew"]["sector"] = "";
	if (count($fieldToolTipsclientes["Hebrew"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsclientes[""] = array();
	$fieldToolTipsclientes[""] = array();
	$pageTitlesclientes[""] = array();
	$fieldLabelsclientes[""]["cliente"] = "Cliente";
	$fieldToolTipsclientes[""]["cliente"] = "";
	$fieldLabelsclientes[""]["roc"] = "Roc";
	$fieldToolTipsclientes[""]["roc"] = "";
	$fieldLabelsclientes[""]["norma"] = "Norma";
	$fieldToolTipsclientes[""]["norma"] = "";
	$fieldLabelsclientes[""]["estatus"] = "Estatus";
	$fieldToolTipsclientes[""]["estatus"] = "";
	$fieldLabelsclientes[""]["sector"] = "Sector";
	$fieldToolTipsclientes[""]["sector"] = "";
	if (count($fieldToolTipsclientes[""]))
		$tdataclientes[".isUseToolTips"] = true;
}


	$tdataclientes[".NCSearch"] = true;



$tdataclientes[".shortTableName"] = "clientes";
$tdataclientes[".nSecOptions"] = 0;
$tdataclientes[".recsPerRowPrint"] = 1;
$tdataclientes[".mainTableOwnerID"] = "";
$tdataclientes[".moveNext"] = 1;
$tdataclientes[".entityType"] = 0;

$tdataclientes[".strOriginalTableName"] = "clientes";

	



$tdataclientes[".showAddInPopup"] = false;

$tdataclientes[".showEditInPopup"] = false;

$tdataclientes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataclientes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataclientes[".fieldsForRegister"] = array();
	
$tdataclientes[".listAjax"] = false;

	$tdataclientes[".audit"] = false;

	$tdataclientes[".locking"] = false;

$tdataclientes[".edit"] = true;
$tdataclientes[".afterEditAction"] = 1;
$tdataclientes[".closePopupAfterEdit"] = 1;
$tdataclientes[".afterEditActionDetTable"] = "";

$tdataclientes[".add"] = true;
$tdataclientes[".afterAddAction"] = 1;
$tdataclientes[".closePopupAfterAdd"] = 1;
$tdataclientes[".afterAddActionDetTable"] = "";

$tdataclientes[".list"] = true;

$tdataclientes[".inlineEdit"] = true;
$tdataclientes[".inlineAdd"] = true;
$tdataclientes[".copy"] = true;
$tdataclientes[".view"] = true;

$tdataclientes[".import"] = true;

$tdataclientes[".exportTo"] = true;

$tdataclientes[".printFriendly"] = true;

$tdataclientes[".delete"] = true;

$tdataclientes[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataclientes[".searchSaving"] = false;
//

$tdataclientes[".showSearchPanel"] = true;
		$tdataclientes[".flexibleSearch"] = true;

$tdataclientes[".isUseAjaxSuggest"] = true;

$tdataclientes[".rowHighlite"] = true;



$tdataclientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclientes[".isUseTimeForSearch"] = false;



$tdataclientes[".badgeColor"] = "4682B4";


$tdataclientes[".allSearchFields"] = array();
$tdataclientes[".filterFields"] = array();
$tdataclientes[".requiredSearchFields"] = array();

$tdataclientes[".allSearchFields"][] = "id";
	$tdataclientes[".allSearchFields"][] = "cliente";
	$tdataclientes[".allSearchFields"][] = "roc";
	$tdataclientes[".allSearchFields"][] = "norma";
	$tdataclientes[".allSearchFields"][] = "estatus";
	$tdataclientes[".allSearchFields"][] = "sector";
	

$tdataclientes[".googleLikeFields"] = array();
$tdataclientes[".googleLikeFields"][] = "id";
$tdataclientes[".googleLikeFields"][] = "cliente";
$tdataclientes[".googleLikeFields"][] = "roc";
$tdataclientes[".googleLikeFields"][] = "norma";
$tdataclientes[".googleLikeFields"][] = "estatus";
$tdataclientes[".googleLikeFields"][] = "sector";


$tdataclientes[".advSearchFields"] = array();
$tdataclientes[".advSearchFields"][] = "id";
$tdataclientes[".advSearchFields"][] = "cliente";
$tdataclientes[".advSearchFields"][] = "roc";
$tdataclientes[".advSearchFields"][] = "norma";
$tdataclientes[".advSearchFields"][] = "estatus";
$tdataclientes[".advSearchFields"][] = "sector";

$tdataclientes[".tableType"] = "list";

$tdataclientes[".printerPageOrientation"] = 0;
$tdataclientes[".nPrinterPageScale"] = 100;

$tdataclientes[".nPrinterSplitRecords"] = 40;

$tdataclientes[".nPrinterPDFSplitRecords"] = 40;



$tdataclientes[".geocodingEnabled"] = false;





$tdataclientes[".listGridLayout"] = 3;

$tdataclientes[".isDisplayLoading"] = true;

$tdataclientes[".isResizeColumns"] = true;


$tdataclientes[".noRecordsFirstPage"] = true;

// view page pdf

// print page pdf


$tdataclientes[".pageSize"] = 20;

$tdataclientes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataclientes[".strOrderBy"] = $tstrOrderBy;

$tdataclientes[".orderindexes"] = array();

$tdataclientes[".sqlHead"] = "SELECT id,  cliente,  roc,  norma,  estatus,  sector";
$tdataclientes[".sqlFrom"] = "FROM clientes";
$tdataclientes[".sqlWhereExpr"] = "";
$tdataclientes[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclientes[".arrGroupsPerPage"] = $arrGPP;

$tdataclientes[".highlightSearchResults"] = true;

$tableKeysclientes = array();
$tableKeysclientes[] = "id";
$tdataclientes[".Keys"] = $tableKeysclientes;

$tdataclientes[".listFields"] = array();
$tdataclientes[".listFields"][] = "cliente";
$tdataclientes[".listFields"][] = "roc";
$tdataclientes[".listFields"][] = "norma";
$tdataclientes[".listFields"][] = "estatus";
$tdataclientes[".listFields"][] = "sector";
$tdataclientes[".listFields"][] = "id";

$tdataclientes[".hideMobileList"] = array();


$tdataclientes[".viewFields"] = array();
$tdataclientes[".viewFields"][] = "id";
$tdataclientes[".viewFields"][] = "cliente";
$tdataclientes[".viewFields"][] = "roc";
$tdataclientes[".viewFields"][] = "norma";
$tdataclientes[".viewFields"][] = "estatus";
$tdataclientes[".viewFields"][] = "sector";

$tdataclientes[".addFields"] = array();
$tdataclientes[".addFields"][] = "cliente";
$tdataclientes[".addFields"][] = "roc";
$tdataclientes[".addFields"][] = "norma";
$tdataclientes[".addFields"][] = "estatus";
$tdataclientes[".addFields"][] = "sector";

$tdataclientes[".masterListFields"] = array();
$tdataclientes[".masterListFields"][] = "id";
$tdataclientes[".masterListFields"][] = "cliente";
$tdataclientes[".masterListFields"][] = "roc";
$tdataclientes[".masterListFields"][] = "norma";
$tdataclientes[".masterListFields"][] = "estatus";
$tdataclientes[".masterListFields"][] = "sector";

$tdataclientes[".inlineAddFields"] = array();
$tdataclientes[".inlineAddFields"][] = "cliente";
$tdataclientes[".inlineAddFields"][] = "roc";
$tdataclientes[".inlineAddFields"][] = "norma";
$tdataclientes[".inlineAddFields"][] = "estatus";
$tdataclientes[".inlineAddFields"][] = "sector";

$tdataclientes[".editFields"] = array();
$tdataclientes[".editFields"][] = "id";
$tdataclientes[".editFields"][] = "cliente";
$tdataclientes[".editFields"][] = "roc";
$tdataclientes[".editFields"][] = "norma";
$tdataclientes[".editFields"][] = "estatus";
$tdataclientes[".editFields"][] = "sector";

$tdataclientes[".inlineEditFields"] = array();
$tdataclientes[".inlineEditFields"][] = "cliente";
$tdataclientes[".inlineEditFields"][] = "roc";
$tdataclientes[".inlineEditFields"][] = "norma";
$tdataclientes[".inlineEditFields"][] = "estatus";
$tdataclientes[".inlineEditFields"][] = "sector";
$tdataclientes[".inlineEditFields"][] = "id";

$tdataclientes[".exportFields"] = array();
$tdataclientes[".exportFields"][] = "id";
$tdataclientes[".exportFields"][] = "cliente";
$tdataclientes[".exportFields"][] = "roc";
$tdataclientes[".exportFields"][] = "norma";
$tdataclientes[".exportFields"][] = "estatus";
$tdataclientes[".exportFields"][] = "sector";

$tdataclientes[".importFields"] = array();
$tdataclientes[".importFields"][] = "id";
$tdataclientes[".importFields"][] = "cliente";
$tdataclientes[".importFields"][] = "roc";
$tdataclientes[".importFields"][] = "norma";
$tdataclientes[".importFields"][] = "estatus";
$tdataclientes[".importFields"][] = "sector";

$tdataclientes[".printFields"] = array();
$tdataclientes[".printFields"][] = "id";
$tdataclientes[".printFields"][] = "cliente";
$tdataclientes[".printFields"][] = "roc";
$tdataclientes[".printFields"][] = "norma";
$tdataclientes[".printFields"][] = "estatus";
$tdataclientes[".printFields"][] = "sector";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdataclientes["id"] = $fdata;
//	cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cliente";
	$fdata["GoodName"] = "cliente";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","cliente");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cliente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cliente";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataclientes["cliente"] = $fdata;
//	roc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "roc";
	$fdata["GoodName"] = "roc";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","roc");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "roc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "roc";

	
	
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

	
		$edata["strEditMask"] = "AAA-999-99";




		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataclientes["roc"] = $fdata;
//	norma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "norma";
	$fdata["GoodName"] = "norma";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","norma");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "norma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "norma";

	
	
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

	
		$edata["strEditMask"] = "AAA 9999:9999";




		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataclientes["norma"] = $fdata;
//	estatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "estatus";
	$fdata["GoodName"] = "estatus";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","estatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "estatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estatus";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "clientes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "estatus";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estatus";

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataclientes["estatus"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","sector");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sector";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "clientes";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "sector";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sector";

	
	$edata["LookupOrderBy"] = "sector";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataclientes["sector"] = $fdata;


$tables_data["clientes"]=&$tdataclientes;
$field_labels["clientes"] = &$fieldLabelsclientes;
$fieldToolTips["clientes"] = &$fieldToolTipsclientes;
$page_titles["clientes"] = &$pageTitlesclientes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["clientes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["clientes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_clientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  cliente,  roc,  norma,  estatus,  sector";
$proto0["m_strFrom"] = "FROM clientes";
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
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "clientes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cliente",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto8["m_sql"] = "cliente";
$proto8["m_srcTableName"] = "clientes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "roc",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto10["m_sql"] = "roc";
$proto10["m_srcTableName"] = "clientes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "norma",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto12["m_sql"] = "norma";
$proto12["m_srcTableName"] = "clientes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "estatus",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto14["m_sql"] = "estatus";
$proto14["m_srcTableName"] = "clientes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto16["m_sql"] = "sector";
$proto16["m_srcTableName"] = "clientes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "clientes";
$proto19["m_srcTableName"] = "clientes";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "cliente";
$proto19["m_columns"][] = "roc";
$proto19["m_columns"][] = "norma";
$proto19["m_columns"][] = "estatus";
$proto19["m_columns"][] = "sector";
$proto19["m_columns"][] = "NOTAS";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "clientes";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "clientes";
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
$proto0["m_srcTableName"]="clientes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_clientes = createSqlQuery_clientes();


	
		;

						

$tdataclientes[".sqlquery"] = $queryData_clientes;

$tableEvents["clientes"] = new eventsBase;
$tdataclientes[".hasEvents"] = false;

?>