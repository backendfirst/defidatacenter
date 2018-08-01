<?php
$dDebug = false;
$dSQL = "";

$tables_data = array();
$page_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$lookupTableLinks = array();

$_gmdays = array(0=>31,1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);

include(getabspath('classes/layout.php'));


//	custom labels
$custom_labels = array();
$custom_labels["Chinese"] = array();
$custom_labels["Chinese (Hong Kong S.A.R.)"] = array();
$custom_labels["Chinese (Taiwan)"] = array();
$custom_labels["Czech"] = array();
$custom_labels["Danish"] = array();
$custom_labels["Dutch"] = array();
$custom_labels["English"] = array();
$custom_labels["French"] = array();
$custom_labels["German"] = array();
$custom_labels["Hebrew"] = array();
$custom_labels["Spanish"] = array();

define('NOT_TABLE_BASED_TNAME', ".global");

/**
 *  Define constants of page name
 */
define('PAGE_LIST',"list");
define('PAGE_MASTER_INFO_LIST',"masterlist");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_MASTER_INFO_REPORT',"masterreport");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_MASTER_INFO_PRINT',"masterprint");
define('PAGE_RPRINT',"rprint");
define('PAGE_MASTER_INFO_RPRINT',"masterrprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_ADMIN_MEMBERS',"admin_members");
define('PAGE_ADMIN_RIGHTS',"admin_rights");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");
define('PAGE_DASHBOARD',"dashboard");
define('PAGE_DASHMAP', "map");

define('ADMIN_USERS',"admin_users");


define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);
define("SECURITY_AD", 2);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);
define("nDATABASE_Interbase", 16);

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);
define("ADD_DASHBOARD",5);
define("ADD_MASTER_POPUP",6);

//	Edit page modes
define("EDIT_SIMPLE",0); 	//	standalone Edit page
define("EDIT_INLINE",1);	//	inlineEdit
define("EDIT_POPUP",3);		//	edit page in popup
define("EDIT_DASHBOARD",4);	//	edit page in dashboard

//	View page modes
define("VIEW_SIMPLE",0); 	//	standalone View page
define("VIEW_POPUP",1); 	//	View page in popup
define("VIEW_DASHBOARD",2); 	//	View page in dashboard

define("LOGIN_SIMPLE", 0);
define("LOGIN_POPUP", 1);
define("LOGIN_EMBEDED", 2);

define("REGISTER_SIMPLE", 0);
define("REGISTER_POPUP", 1);

define("REMIND_SIMPLE", 0);
define("REMIND_POPUP", 1);

define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);
define("titDASHBOARD",4);

define("TAB_TYPE_TAB", 0);
define("TAB_TYPE_SECTION", 1);
define("TAB_TYPE_STEP", 2);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);
define("LIST_DASHBOARD", 7);
define("LIST_DASHDETAILS", 8);
define("MAP_DASHBOARD", 9);
define("LIST_MASTER",10);
define("PRINT_MASTER",11);

define("REPORT_SIMPLE", 0);
define("REPORT_POPUPDETAILS", 1);
define("REPORT_DASHBOARD", 2);
define("REPORT_DETAILS", 3);
define("REPORT_DASHDETAILS", 4);

define("CHART_SIMPLE", 0);
define("CHART_POPUPDETAILS", 1);
define("CHART_DASHBOARD", 2);
define("CHART_DETAILS", 3);
define("CHART_DASHDETAILS", 4);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("DL_SINGLE",0);
define("DL_INDIVIDUAL",1);
define("DL_NONE",2);

define("SEARCH_SIMPLE", 0);
define("SEARCH_LOAD_CONTROL", 1);
define("SEARCH_DASHBOARD", 2);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);
define("ENCRYPTION_ALG_DES", 1);
define("ENCRYPTION_ALG_AES", 128);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);
define("gltFLEXIBLE", 3);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

/* Dashboard types */
define("DASHBOARD_LIST", 0);
define("DASHBOARD_CHART", 1);
define("DASHBOARD_REPORT", 2);
define("DASHBOARD_RECORD", 3);
define("DASHBOARD_SEARCH", 4);
define("DASHBOARD_DETAILS", 5);
define("DASHBOARD_MAP", 6);
/**/

/* Define message type constants */
define("MESSAGE_INFO", 1);
define("MESSAGE_ERROR", 2);

/* Define print page and pdf page constants */
define("PRINT_PAGE_WIDTH", 700);
define("PRINT_PAGE_HEIGHT", 900);
define("PDF_PAGE_WIDTH", 750);
define("PDF_PAGE_HEIGHT", 1060);

/* Defined maps type */
define("GOOGLE_MAPS", 0);
define("OPEN_STREET_MAPS", 1);
define("BING_MAPS", 2);

/* Defined captcha type */
define("FLASH_CAPTCHA", 0);
define("RE_CAPTCHA", 1);

/* Define 'after record added/edited actions' constants*/
define("AA_TO_LIST", 0);
define("AA_TO_ADD", 1);
define("AA_TO_VIEW", 2);
define("AA_TO_EDIT", 3);
define("AA_TO_DETAIL_ADD", 4);
define("AA_TO_DETAIL_LIST", 5);

define("AE_TO_LIST", 0);
define("AE_TO_EDIT", 1);
define("AE_TO_VIEW", 2);
define("AE_TO_NEXT_EDIT", 3);
define("AE_TO_PREV_EDIT", 4);
define("AE_TO_DETAIL_LIST", 5);
/**/

define('BOOTSTRAP_LAYOUT', 3);

define('ICON_NONE', 0);
define('ICON_FILE', 1);
define('ICON_BOOTSTRAP_GLYPH', 2);



define('WELCOME_MENU', "welcome_page");

define('MENU_VERTICAL', "v");
define('MENU_HORIZONTAL', "h");
define('MENU_QUICKJUMP', "q");


$globalSettings = array();
$globalSettings["nLoginForm"] = 1;

$globalSettings["nLoginMethod"] = 1;

$globalSettings["popupPagesLayoutNames"] = array();
						
	;
$globalSettings["popupPagesLayoutNames"]["login"] = "login_bootstrap";
						
	;
$globalSettings["popupPagesLayoutNames"]["register"] = "register_bootstrap";
						
	;
$globalSettings["popupPagesLayoutNames"]["remind"] = "remind_bootstrap";


$ajaxSearchStartsWith = true;




$globalSettings["LandingPageType"] = 1;
$globalSettings["LandingTable"] = "clientes";
$globalSettings["LandingPage"] = "list";
$globalSettings["LandingURL"] = "clientes_list.php";

$globalSettings["ProjectLogo"] = array();
$globalSettings["ProjectLogo"]["Chinese"] = "QCC";
$globalSettings["ProjectLogo"]["Chinese (Hong Kong S.A.R.)"] = "QCC";
$globalSettings["ProjectLogo"]["Chinese (Taiwan)"] = "QCC";
$globalSettings["ProjectLogo"]["Czech"] = "QCC";
$globalSettings["ProjectLogo"]["Danish"] = "QCC";
$globalSettings["ProjectLogo"]["Dutch"] = "QCC";
$globalSettings["ProjectLogo"]["English"] = "QCC";
$globalSettings["ProjectLogo"]["French"] = "QCC";
$globalSettings["ProjectLogo"]["German"] = "QCC";
$globalSettings["ProjectLogo"]["Hebrew"] = "QCC";
$globalSettings["ProjectLogo"]["Spanish"] = "QCC";

$globalSettings["createLoginPage"] = true;

$globalSettings["apiGoogleMapsCode"] = "";


$globalSettings["useBuiltInMailer"] = true;


/**
 * If true then detail table name will be printed before detail table on the view page
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed
 */
$globalSettings["searchSuggestsNumber"] = 10;

$globalSettings["override"] = array();


$globalSettings["mapProvider"]=0;

$globalSettings["CaptchaSettings"] = array();
$globalSettings["CaptchaSettings"]["type"] = 0;
$globalSettings["CaptchaSettings"]["siteKey"] = "";
$globalSettings["CaptchaSettings"]["secretKey"] = "";
$globalSettings["CaptchaSettings"]["captchaPassesCount"] = "5";

$globalSettings["CaptchaSettings"]["isEnabledOnLogin"] = true;
$globalSettings["CaptchaSettings"]["isEnabledOnRegister"] = true;
$globalSettings["CaptchaSettings"]["isEnabledOnRemind"] = true;

$wr_pagestylepath = "OfficeOffice";
$wr_is_standalone = false;
$WRAdminPagePassword = "";

$cLoginTable = "user";
$cDisplayNameField = "fullname";
$cUserNameField	= "username";
$cPasswordField	= "password";
$cUserGroupField = "username";
$cEmailField = "email";

if ($cDisplayNameField == ''){
	$cDisplayNameField = $cUserNameField;
}

$cDisplayNameFieldType	= 200;
$cUserNameFieldType	= 200;
$cPasswordFieldType	= 200;
$cEmailFieldType = 200;

																					$cUserNameFieldType	= 200;
															$cEmailFieldType = 200;
						$cPasswordFieldType	= 200;
																					

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";
$showCustomMarkerOnPrint = false;

$mlang_messages = array();
$mlang_charsets = array();




$menuAssignments = array();
$menuSelector = array();
$menuSelector["page"] = "welcome_page";
$menuSelector["id"] = "mainmenu";
$menuSelector["name"] = "welcome_page";
$menuSelector["horizontal"] = "0";
$menuAssignments[] = $menuSelector;

$menuStyles = array();

$menuTreelikeFlags = array();
$menuTreelikeFlags["main"] = 0;

$menuDrillDownFlags = array();
$menuDrillDownFlags["main"] = 0;

$menuTreelikeFlags["welcome_page"] = 0;
$menuDrillDownFlags["welcome_page"] = 0;



// table captions
$tableCaptions = array();
$tableCaptions["Spanish"] = array();
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"]["clientes"] = "Clientes";
$tableCaptions["Spanish"]["user"] = "User";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Chinese"] = array();
$tableCaptions["Chinese"][""] = "";
$tableCaptions["Chinese"]["clientes"] = "Clientes";
$tableCaptions["Chinese"]["user"] = "User";
$tableCaptions["Chinese (Hong Kong S.A.R.)"] = array();
$tableCaptions["Chinese (Hong Kong S.A.R.)"][""] = "";
$tableCaptions["Chinese (Hong Kong S.A.R.)"]["clientes"] = "Clientes";
$tableCaptions["Chinese (Hong Kong S.A.R.)"]["user"] = "User";
$tableCaptions["Chinese (Taiwan)"] = array();
$tableCaptions["Chinese (Taiwan)"][""] = "";
$tableCaptions["Chinese (Taiwan)"]["clientes"] = "Clientes";
$tableCaptions["Chinese (Taiwan)"]["user"] = "User";
$tableCaptions["Czech"] = array();
$tableCaptions["Czech"][""] = "";
$tableCaptions["Czech"]["clientes"] = "Clientes";
$tableCaptions["Czech"]["user"] = "User";
$tableCaptions["Danish"] = array();
$tableCaptions["Danish"][""] = "";
$tableCaptions["Danish"]["clientes"] = "Clientes";
$tableCaptions["Danish"]["user"] = "User";
$tableCaptions["Dutch"] = array();
$tableCaptions["Dutch"][""] = "";
$tableCaptions["Dutch"]["clientes"] = "Clientes";
$tableCaptions["Dutch"]["user"] = "User";
$tableCaptions["English"] = array();
$tableCaptions["English"][""] = "";
$tableCaptions["English"]["clientes"] = "Clientes";
$tableCaptions["English"]["user"] = "User";
$tableCaptions["French"] = array();
$tableCaptions["French"][""] = "";
$tableCaptions["French"]["clientes"] = "Clientes";
$tableCaptions["French"]["user"] = "User";
$tableCaptions["German"] = array();
$tableCaptions["German"][""] = "";
$tableCaptions["German"]["clientes"] = "Clientes";
$tableCaptions["German"]["user"] = "User";
$tableCaptions["Hebrew"] = array();
$tableCaptions["Hebrew"][""] = "";
$tableCaptions["Hebrew"]["clientes"] = "Clientes";
$tableCaptions["Hebrew"]["user"] = "User";
$tableCaptions[""] = array();
$tableCaptions[""][""] = "";
$tableCaptions[""]["clientes"] = "Clientes";
$tableCaptions[""]["user"] = "User";


$globalEvents = new class_GlobalEvents;
$tableEvents = array();

include(getabspath('classes/security.php'));
include( getabspath("connections/dbfunctions_legacy.php") );
include( getabspath("connections/ConnectionManager.php") );
$cman = new ConnectionManager();

$mlang_defaultlang = getDefaultLanguage();

include(getabspath("include/languages.php"));


$page_titles[".global"] = array();
if(mlang_getcurrentlang()=="Spanish")
{
}
if(mlang_getcurrentlang()=="Chinese")
{
}
if(mlang_getcurrentlang()=="Chinese (Hong Kong S.A.R.)")
{
}
if(mlang_getcurrentlang()=="Chinese (Taiwan)")
{
}
if(mlang_getcurrentlang()=="Czech")
{
}
if(mlang_getcurrentlang()=="Danish")
{
}
if(mlang_getcurrentlang()=="Dutch")
{
}
if(mlang_getcurrentlang()=="English")
{
}
if(mlang_getcurrentlang()=="French")
{
}
if(mlang_getcurrentlang()=="German")
{
}
if(mlang_getcurrentlang()=="Hebrew")
{
}
if(mlang_getcurrentlang()=="")
{
}

$globalSettings["showDetailedError"] = false;
$globalSettings["customErrorMessage"] = "Ocurrio un error.";

// SearchClause::getSearchObject
$_cachedSeachClauses = array();


// default connection link #9875
$conn = $cman->getDefault()->conn;

$logoutPerformed = false;
$scriptname = getFileNameFromURL();
	if(!isLogged() && $scriptname!="login.php" && $scriptname!="remind.php" && $scriptname!="register.php" && $scriptname!="checkduplicates.php")
{
	Security::doGuestLogin();
}



$isGroupSecurity = true;

$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$caseInsensitiveUsername = 0;

$menuNodesIndex=0;


include(getabspath('classes/searchclause.php'));
include(getabspath('classes/projectsettings.php'));
include_once(getabspath('classes/runnerpage.php'));
include_once(getabspath("classes/controls/ViewControl.php"));

?>