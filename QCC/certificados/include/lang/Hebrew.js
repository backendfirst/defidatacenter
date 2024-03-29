Runner.namespace('Runner.lang');

Runner.lang.constants = {

	current_language: "Hebrew",
	
//	for list page
	TEXT_FIRST: 'ראשון',
	TEXT_PREVIOUS: 'קודם',
	TEXT_NEXT: 'הבא',
	TEXT_LAST: 'אחרון',
	TEXT_PROCEED_TO: 'המשך ל',
	TEXT_DETAIL_NOT_SAVED: 'רשומות ב %s  לא נשמרו',
	TEXT_NO_RECORDS: 'לא נמצאו פריטים',
	TEXT_DETAIL_GOTO: 'עבור ל',
	TEXT_SHOW_ALL: 'הצג הכול',
	TEXT_SHOW_OPTIONS: 'להציג אפשרויות',
	TEXT_HIDE_OPTIONS: 'להסתיר אפשרויות',
	TEXT_SEARCH_SHOW_OPTIONS:'להציג אפשרויות חיפוש',
	TEXT_SEARCH_HIDE_OPTIONS:'הסתר אפשרויות חיפוש',
	TEXT_SHOW_SEARCH_PANEL:'Show search panel',
	TEXT_HIDE_SEARCH_PANEL:'Hide search panel',


	TEXT_LOADING: 'טוען',
	TEXT_DELETE_CONFIRM: 'האם אתה בטוח שאתה רוצה למחוק פריטים אלו',
	TEXT_PAGE: 'עמודים',
	TEXT_PAGEMAX: 'מתוך',

//	for editing pages	
	TEXT_INVALID_CAPTCHA_CODE: 'קוד אבטחה אינו חוקי',	
	TEXT_PLEASE_SELECT: 'אנא בחר',
	TEXT_CTRL_CLICK: 'CTRL + click  כדי לעשות מיונים רבים לעשות',
	TEXT_SAVE: 'שמור',
	TEXT_CANCEL: 'בטל',
	TEXT_PREVIEW: 'תצוגה מקדימה ',
	TEXT_HIDE: 'מוסתר',
	TEXT_QUESTION_UNSAVED_CHANGES: 'Do you want to navigate away from this page and lose unsaved changes?',
	
	TEXT_EDIT: 'ערוך', 
	TEXT_COPY: 'העתק',
	TEXT_VIEW: 'צפה',
	TEXT_INLINE_EDIT: 'ערוך',
	TEXT_INLINE_ADD: 'הוסף חדש',
	TEXT_AA_P_ADD: 'הוספה',

//	for calendar
	TEXT_MONTH_JAN: 'ינואר',
	TEXT_MONTH_FEB: 'פברואר',
	TEXT_MONTH_MAR: 'מרץ',
	TEXT_MONTH_APR: 'אפריל',
	TEXT_MONTH_MAY: 'מאי',
	TEXT_MONTH_JUN: 'יוני',
	TEXT_MONTH_JUL: 'יולי',
	TEXT_MONTH_AUG: 'אוגוסט',
	TEXT_MONTH_SEP: 'ספטמבר',
	TEXT_MONTH_OCT: 'אוקטובר',
	TEXT_MONTH_NOV: 'נובמבר',
	TEXT_MONTH_DEC: 'דצמבר',
	TEXT_DAY_SU: 'ראשון',
	TEXT_DAY_MO: 'שני',
	TEXT_DAY_TU: 'שלישי',
	TEXT_DAY_WE: 'רביעי',
	TEXT_DAY_TH: 'חמישי',
	TEXT_DAY_FR: 'שישי',
	TEXT_DAY_SA: 'שבת',
	TEXT_TODAY: 'היום',
	TEXT_SELECT_DATE: 'תבחר תאריך',
	TEXT_TIME: 'Time',
	TEXT_TIME_HOUR: 'Hour',
	TEXT_TIME_MINUTE: 'Minute',
	TEXT_TIME_SECOND: 'Second',
	
//	for inline message	
	TEXT_INLINE_FIELD_REQUIRED: 'שדה שחייבים למלא',
	TEXT_INLINE_FIELD_ZIPCODE: 'השדות צריכים להיות מספר מיקוד',
	TEXT_INLINE_FIELD_EMAIL: 'השדה צריך להיות דואר אלקטרוני חוקי',
	TEXT_INLINE_FIELD_NUMBER: 'השדה צריך להיות מספר',
	TEXT_INLINE_FIELD_CURRENCY: 'השדה צריך להיות מטבע',
	TEXT_INLINE_FIELD_PHONE: 'השדה צריך להיות מספר טלפון',
	TEXT_INLINE_FIELD_PASSWORD1: 'השדה לא יכול להיות ',
	TEXT_INLINE_FIELD_PASSWORD2: 'השדה צריך לכלול לפחות 4  תווים',
	TEXT_INLINE_FIELD_STATE: 'שדה צריך להיות שם מדינה ',
	TEXT_INLINE_FIELD_SSN: 'שדה צריך להיות מספר תעודת זהות',
	TEXT_INLINE_FIELD_DATE: 'השדה צריך להיות תאריך חוקי',
	TEXT_INLINE_FIELD_TIME: 'השדה צריך להיות בפורמט של 24 שעות',
	TEXT_INLINE_FIELD_CC: 'השדה צריך להיות מספר כרטיס אשראי קיים',
	TEXT_INLINE_ERROR: 'אירעה שגיאה',
	TEXT_INLINE_DENY_DUPLICATES: 'Field should not contain a duplicate value',
	TEXT_INLINE_USERNAME_EXISTS1: 'שם משתמש', 
	TEXT_INLINE_USERNAME_EXISTS2: 'כבר קיים במערכת. בחר שם משתמש אחר',
	TEXT_INLINE_EMAIL_ALREADY1: 'אי מייל', 
	TEXT_INLINE_EMAIL_ALREADY2: 'כבר רשום במערכת. אם שכחת את שם המשתמש שלך או הסיסמא השתמש בטופס תזכורת סיסמא',

	//for RTE
	TEXT_VIEW_SOURCE: 'צפה בקוד מקור',
	//for tree-like menu
	TEXT_EXPAND_ALL: 'תרחיב הכל',
	TEXT_COLLAPSE_ALL: 'תוריד הכל',
	
	//for register page
	SEC_PWD_LEN: 'הסיסמה צריכה לכלול לפחות %%  תווים',
	SEC_PWD_CASE: 'הסיסמה צריכה לכלול אותיות גדולות וקטנות',
	SEC_PWD_DIGIT: 'הסיסמה צריכה לכלול %% ספרות או סמלים',
	SEC_PWD_UNIQUE: 'הסיסמה  צריכה לכלול %% תווים יחידים',
	PASSWORDS_DONT_MATCH: 'הסיסמאות אין תואמות',
	SUCCES_LOGGED_IN: 'You have successfully logged in.',
	
	//for pdf
	TEXT_PDF_BUILD1: 'בונה קובץ PDF',
	TEXT_PDF_BUILD2: 'הסתיים',
	TEXT_PDF_BUILD3: 'Could not create PDF',

	CLOSE_WINDOW: 'סגור חלון',
	RESET: 'אפס',
	
	//for search options
	CONTAINS: 'המכיל',
	EQUALS: 'שווה ל...',
	STARTS_WITH: 'מתחיל עם...',
	MORE_THAN: 'יותר מ...',
	LESS_THAN: 'פחות מ...',
	BETWEEN: 'בין',
	EMPTY: 'ריק',
	
	NOT_CONTAINS: 'לא מכיל',
	NOT_EQUALS: 'לא שווה',
	NOT_STARTS_WITH: 'לא מתחיל',
	NOT_MORE_THAN: 'לא יותר מ',
	NOT_LESS_THAN: 'לא פחות מ',
	NOT_BETWEEN: 'לא נמצא בטווח',
	NOT_EMPTY: 'לא ריק',
	
	SEARCH_FOR: 'חפש אחר',
	
	ERROR_MISSING_FILE_NAME: 'File name was not provided',
	ERROR_ACCEPT_FILE_TYPES: 'File type is not acceptable',
	ERROR_MAX_FILE_SIZE: 'File size exceeds limit of %s kbytes',
	ERROR_MIN_FILE_SIZE: 'File size must not be less than %s kbytes',
	ERROR_MAX_TOTAL_FILE_SIZE: 'Total files size exceeds limit of %s kbytes',
	ERROR_MAX_NUMBER_OF_FILES_ONE: 'You can upload only one file',
	ERROR_MAX_NUMBER_OF_FILES_MANY: 'You can upload no more than %s files',
	
	TEXT_SERVER_ERROR_OCCURRED: 'Server error occurred',
	TEXT_SEE_DETAILS: 'See details',

	ERROR_UPLOAD: 'Uploading failed',
	START_UPLOAD: 'Upload',
	CANCEL: 'בטל',
	DELETE: 'מחק',
	
	UPLOAD_DRAG: 'Drag files here',
	
	SELECT_ALL: 'Select all',
	UNSELECT_ALL: 'Unselect all',
	
	TEXT_WR_REPORT_SAVED: 'Report Saved',
	TEXT_WR_SOME_PROBLEM: 'Some problems appear during saving',
	TEXT_WR_CROSS_GROUP: 'Group',
	TEXT_WR_HEADER: 'Header',
	TEXT_WR_CROSS_GROUP: 'Group',
	TEXT_COUNT: 'ספור', 
	TEXT_MIN: 'מינימום',
	TEXT_MAX: 'מקסימום', 
	TEXT_SUM: 'סיכום',
	TEXT_AVG: 'ממוצע',
	TEXT_WR_TOTAL_DATA: 'Table Data', 
	TEXT_PAGE_SUMMARY: 'סיכום עמוד',
	TEXT_GLOBAL_SUMMARY: 'סיכום מצטבר',
	TEXT_WR_SUMMARY: 'Summary',
	TEXT_FIELD: 'שדה',
	TEXT_WR_NO_COLOR: 'No color',
	
	TEXT_SEARCH_SAVING: 'Search saving',
	TEXT_SEARCH_NAME: 'Search name:',
	TEXT_DELETE_SEARCH_CAPTION: 'Delete saved search',
	TEXT_DELETE_SEARCH: 'Do you really want to delete this search?',
	TEXT_YES: 'כן',
	TEXT_NO: 'לא',
	
	TEXT_FILTER_APPLY: 'Apply',
	TEXT_FILTER_CLEAR: 'Clear',
	TEXT_FILTER_MULTISELECT: 'Multiselect',
	
	// for rights page
	AA_ADD_NEW_GROUP: 'הוספת קבוצה חדשה',
	AA_RENAMEGROUP: 'שינוי שם הקבוצה',
	AA_GROUP_NEW: 'קבוצה-חדשה',
	AA_DELETEGROUP: 'בטוח רוצים למחוק את הקבוצה?',
	AA_COPY_PERMISS_FROM: 'Choose the group to copy permissions from:',
	AA_CHOOSE_COLUMNS_TO_DIPLAY: 'Choose columns to display',
	AA_SELECT_NONE: 'Select none',
	AA_OK: 'אישור',
	
	PREPARE_PAGE_FOR_PRINTING: 'Preparing page for printing',
	
	// import page
	IMPORT_PROCESSING_RECORDS: 'Processing records',
	IMPORT_FAILED: 'Import Failed'
};

Runner.lang.customlabels = {
	
	prefix: 'CUSTOM_LABEL_',
	
	// custom labels
};