<?php
class RegisterPage extends RunnerPage
{
	public $pwdStrong = false;

	public $action;
	
	protected $regValues = array();
	
	protected $registerSuccess = false;
	
	protected $strUsername;
	protected $strPassword;
	protected $strEmail;
	
	protected $passwordFiled;
	protected $usernameFiled;
	protected $emailFiled;
	
	protected $sendActivationLink = false;
	
	
	function __construct(&$params = "")
	{
		parent::__construct($params);

		$this->passwordFiled = GetPasswordField();
		$this->usernameFiled = GetUserNameField();
		$this->emailFiled = GetEmailField();

		$this->sendActivationLink = true;
		
		// fill global password settings
		$this->pwdStrong = GetGlobalData("pwdStrong", false);
		if($this->pwdStrong)
		{
			$this->settingsMap["globalSettings"]["pwdLen"] = GetGlobalData("pwdLen", 0);
			$this->settingsMap["globalSettings"]["pwdUnique"] = GetGlobalData("pwdUnique", 0);
			$this->settingsMap["globalSettings"]["pwdDigits"] = GetGlobalData("pwdDigits", 0);
			$this->settingsMap["globalSettings"]["pwdStrong"] = true;
			$this->settingsMap["globalSettings"]["pwdUpperLower"] = GetGlobalData("pwdUpperLower", false);
		}

		$this->formBricks["header"] = "regheader";
		$this->formBricks["footer"] = "regbuttons";
		$this->assignFormFooterAndHeaderBricks( true );
	}

	/**
	 * Set the connection property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();
	}
	
	/**
	 * Set the 'cipherer' property
	 */
	protected function assignCipherer()
	{
		$this->cipherer = new RunnerCipherer( $this->tName );
	}	

	/**
	 * Activate user by email link
	 */
	protected function activateNewUser()
	{
		$username = base64_decode(@$_GET["u"]);
		$code = @$_GET["code"];
		
		if( $this->cipherer->isFieldEncrypted("username") )
			$strUsername = $this->cipherer->MakeDBValue("username", $username, "", true);
		else
			$strUsername = make_db_value("username", $username);

		$sql = "select ".$this->getFieldSQLDecrypt("password")
			." from ". $this->connection->addTableWrappers( "user" ) 
			." where ".$this->getFieldSQLDecrypt("username") . "=" . $strUsername;
		
		$qResult = $this->connection->query( $sql );
		if( !$qResult )
		{
			echo mlang_message("SEC_INVALID_REG_CODE");
			return;
		}
		
		$data = $qResult->fetchNumeric();
		if( !$data )
		{
			echo mlang_message("SEC_INVALID_REG_CODE");
			return;
		}
		
		$dbPassword = $this->cipherer->DecryptField( "password", $data[0] );
		$usercode = $username.md5( $dbPassword );
		if( $code != md5( $usercode ) )
		{
			echo mlang_message("SEC_INVALID_REG_CODE");
			return;
		}
			
		$sql = "update ". $this->connection->addTableWrappers( "user" )
			." set ". $this->connection->addFieldWrappers( "active" )."=1 "
			." where " . $this->getFieldSQLDecrypt("username" ) . "=" . $strUsername;
		$this->connection->exec( $sql );

		$this->updatePageLayoutAndCSS('', 'success');
		
		$this->body["begin"].= "<form method=\"POST\" action=\"".GetTableLink("login")."\" name=\"loginform\">
		<input type=\"Hidden\" name=\"username\" value=\"".runner_htmlspecialchars($username)."\">";
		$this->body["begin"].= "<input type=\"Hidden\" name=\"password\" value=\"".runner_htmlspecialchars($data["password"])."\">";
		$this->body["begin"].= "</form>";
		
		$this->xt->assign("body", $this->body);
		$this->xt->assign("registered_block", true);
		$this->xt->assign("loginlink_attrs", "onclick=\"document.forms.loginform.submit();return false;\" id=\"ProceedToLogin\"");	
		
		return $this->display( GetTemplateName("", "register_success") ); // return $this->display for .net compatibility	
	}
	
	/**
	 *
	 */
	public function process()
	{
		global $globalEvents;
		
		//	Before Process event
		if( $globalEvents->exists("BeforeProcessRegister") )
			$globalEvents->BeforeProcessRegister( $this );

		if( $this->action  == "activate" )
			return $this->activateNewUser();

		if( $this->action == "Register" )
		{
			$this->registerSuccess = $this->registerNewUser();
			$this->doAfterRegistrationEvent();
				
				$this->notifyUserAndAdmin();
	
			if( !$this->registerSuccess && $this->mode == REGISTER_POPUP  )
			{
				$returnJSON = array();
				$returnJSON['success'] = false;
				
				if( strlen( $this->message ) )
				{
					$returnJSON['wrongCaptchaFieldName'] = $this->getCaptchaFieldName();
					$returnJSON['message'] = $this->message;
				}	
				
				echo printJSON($returnJSON);
				exit();
			}
		}
	
		// proccess captcha
		if( $this->captchaExists() )
			$this->displayCaptcha();

		if( !$this->registerSuccess )
		{		
			$this->prepareEditControls();	
			$this->prepareSteps();
			$this->fillCntrlTabGroups();
			$this->prepareReadonlyFields();		
		}		
	
		if( $this->registerSuccess && !$this->sendActivationLink || !$this->registerSuccess )
		{
			$this->addCommonJs();
			$this->fillSetCntrlMaps();
			$this->addButtonHandlers();		
		}
		
		$this->doCommonAssignments();
		
		$this->showPage();
	}

	/**
	 * Run after registration event
	 */
	protected function doAfterRegistrationEvent()
	{
		global $globalEvents;
		
		if( $this->registerSuccess && $globalEvents->exists("AfterSuccessfulRegistration") )
			$globalEvents->AfterSuccessfulRegistration( $this->regValues, $this );			
		
		if( !$this->registerSuccess && $globalEvents->exists("AfterUnsuccessfulRegistration") )
			$globalEvents->AfterUnsuccessfulRegistration( $this->regValues, $this->message, $this );		
	}

	/**
	 * Send emails to a new registered user or/and to admin-user
	 */
	protected function notifyUserAndAdmin()
	{
		if( !$this->registerSuccess )
			return;
			
		$sentMailResults = $this->sendUserRegisterMessage();
		
		if( !$sentMailResults["mailed"] )
			$this->message.= " ".$sentMailResults["message"];				
		
		$sentMailResults1 = $this->sendAdminRegisterMessage();
		if( !$sentMailResults1["mailed"] )
			$this->message.= " ".$sentMailResults1["message"];	
	}
	
	/**
	 * Send an email to a new registered user
	 * @return Array
	 */
	protected function sendUserRegisterMessage()
	{
		$url = GetSiteUrl() . $_SERVER["SCRIPT_NAME"];

		$message = mlang_message("REGMAIL_USER1")." ".$url."\r\n\r\n";
		$message.= mlang_message("REGMAIL_USER2").":\r\n";
		$message.= $url."?a=activate&u=".rawurlencode(base64_encode($this->regValues["username"]))."&code=";
		$message.= rawurlencode( md5( $this->regValues["username"].md5( $this->regValues["password"] ) ) );
		$message.= "\r\n(".mlang_message("REGMAIL_USER3").")\r\n\r\n";
	
		$strLabel = $this->pSet->label("username");
		$message.= $strLabel.": ".$this->regValues["username"]."\r\n";
		$strLabel = $this->pSet->label("email");
		$message.= $strLabel.": ".$this->regValues["email"]."\r\n";
		$strLabel = $this->pSet->label("fullname");
		$message.= $strLabel.": ".$this->regValues["fullname"]."\r\n";

		$strEmail = $this->strEmail;	
		if( ( $pos = strpos($this->strEmail,"\r") ) !== FALSE || ($pos = strpos( $this->strEmail, "\n") ) !== FALSE )
			$strEmail = substr( $this->strEmail, 0, $pos );
		
		return runner_mail( array('to' => $strEmail, 'subject' => mlang_message("REGMAIL_USER4"), 'body' => $message) );	
	}
	
	/**
	 * Send an email to admin-user
	 * @return Array	 
	 */
	protected function sendAdminRegisterMessage()
	{
		$url = GetSiteUrl() . $_SERVER["SCRIPT_NAME"];
		
		$message = mlang_message("REGMAIL_ADMIN1")." ".$url."\r\n";
		$strLabel = $this->pSet->label("username");
		$message.= $strLabel.": ".$this->regValues["username"]."\r\n";
		$strLabel = $this->pSet->label("email");
		$message.= $strLabel.": ".$this->regValues["email"]."\r\n";
		$strLabel = $this->pSet->label("fullname");
		$message.= $strLabel.": ".$this->regValues["fullname"]."\r\n";
		return runner_mail(array('to' => "franciscoricardo@hotmail.com", 'subject' => mlang_message("REGMAIL_USER4"), 'body' => $message));		
	}
	
	/**
	 *
	 */
	protected function registerNewUser()
	{
		global $globalEvents;
		
		$allow_registration = true;
		
		if ( !$this->checkCaptcha() )
			$allow_registration = false;

		$values = array();		
		$blobfields = array();
		$filename_values = array();
		foreach( $this->pSet->getFieldsForRegister() as $uf )
		{
			$_control = $this->getControl( $uf, $this->id );;
			$_control->readWebValue($values, $blobfields, NULL, NULL, $filename_values);;
		}

		//	add filenames to values
		foreach( $filename_values as $key => $value )
		{
			$values[ $key ] = $value;
		}		

		$values["active"] = 0;
		
		$this->strUsername = $values["username"];
		$this->strPassword = $values["password"];
		$this->strEmail = $values["email"];
		
		if( !$this->checkRegisterData( $this->strUsername, $this->strPassword, $this->strEmail ) )
			$allow_registration = false;

		$retval = $allow_registration;
		if( $retval && $globalEvents->exists("BeforeRegister") )
			$retval = $globalEvents->BeforeRegister($values, $this->message, $this);
		
		if( !$retval ) 			
			return false;
			

		$retval = DoInsertRecord("user", $values, $blobfields, $this);


		$this->regValues = $values;
		
		return $retval;
	}

	/**
	 * Check if the registration data is valid
	 * @param String strUsername
	 * @param String strPassword
	 * @param String strEmail
	 * @return Boolean
	 */
	protected function checkRegisterData( $strUsername, $strPassword, $strEmail )
	{
		$ret = true;
		
		//	check if entered username already exists
		if( !strlen($strUsername) )
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['msg_userError'] = mlang_message("USER_NOEMPTY");
			$ret = false;
		}	
		else if( !$this->checkIfUsernameUnique( $strUsername ) )
		{		
			$this->jsSettings['tableSettings'][ $this->tName ]['msg_userError'] = mlang_message("USERNAME_EXISTS1")." <i>".$strUsername."</i> ".mlang_message("USERNAME_EXISTS2");
			$ret = false;
		}

		//	check if entered email already exists
		if( !strlen($strEmail) )
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['msg_emailError'] = mlang_message("VALID_EMAIL");
			$ret = false;
		}
		else if( !$this->checkIfEmailUnique( $strEmail ) )
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['msg_emailError'] = mlang_message("EMAIL_ALREADY1")." <i>".$strEmail."</i> ".mlang_message("EMAIL_ALREADY2");
			$ret = false;
		}
		
		if( $this->pwdStrong )
		{
			if( !checkpassword( $strPassword ) )
			{
				$this->jsSettings['tableSettings'][ $this->tName ]['msg_passwordError'] = $this->getPwdStrongFailedMessage();
				$ret = false;
			}
		}
		
		return $ret;
	}
	
	
	/**
	 * @return String
	 */
	protected function getPwdStrongFailedMessage()
	{
		$msg = "";
		$pwdLen = GetGlobalData("pwdLen", 0);
		if($pwdLen)
		{
			$fmt = mlang_message("SEC_PWD_LEN");
			$fmt = str_replace("%%", "".$pwdLen, $fmt);
			$msg.= "<br>".$fmt;
		}
		$pwdUnique = GetGlobalData("pwdUnique", 0);
		if($pwdUnique)
		{
			$fmt = mlang_message("SEC_PWD_UNIQUE");
			$fmt = str_replace("%%", "".$pwdUnique, $fmt);
			$msg.= "<br>".$fmt;
		}
		$pwdDigits = GetGlobalData("pwdDigits", 0);
		if($pwdDigits)
		{
			$fmt = mlang_message("SEC_PWD_DIGIT");
			$fmt = str_replace("%%", "".$pwdDigits, $fmt);
			$msg.= "<br>".$fmt;
		}
		if(GetGlobalData("pwdUpperLower", false))
		{
			$fmt = mlang_message("SEC_PWD_CASE");
			$msg.= "<br>".$fmt;
		}
		
		if($msg)
			$msg = substr($msg, 4);

		return $msg;		
	}
	
	/**
	 * @param String strUsername
	 * @return Boolean
	 */
	protected function checkIfUsernameUnique( $strUsername )
	{
		if( $this->cipherer->isFieldEncrypted("username") )
			$sUsername = $this->cipherer->MakeDBValue("username", $strUsername, "", true);	
		else 
			$sUsername = add_db_quotes("username", $strUsername);
			
		$strSQL = "select count(*) from ". $this->connection->addTableWrappers( "user" ) 
			. " where " . $this->getFieldSQLDecrypt("username") . "=" . $sUsername;
		
		$data = $this->connection->query( $strSQL )->fetchNumeric();
		return $data[0] == 0;
	}
	
	/**
	 * @param String strEmail
	 * @return Boolean
	 */
	protected function checkIfEmailUnique( $strEmail )
	{
		if( $this->cipherer->isFieldEncrypted("email") )
			$sEmail = $this->cipherer->MakeDBValue("email", $strEmail, "", true);	
		else 
			$sEmail = add_db_quotes("email", $strEmail);
			
		$strSQL = "select count(*) from ". $this->connection->addTableWrappers( "user" ) 
			." where ".$this->getFieldSQLDecrypt("email")."=".$sEmail;
		
		$data = $this->connection->query( $strSQL )->fetchNumeric();
		return $data[0] == 0;	
	}
	
	/**
	 * Set values for the page's controls
	 */
	protected function prepareEditControls()
	{
		$regFields = $this->pSet->getFieldsForRegister();
			
		if( !count($this->regValues) )
		{
			foreach( $regFields as $f )
			{
				$defaultValue = GetDefaultValue($f, PAGE_REGISTER);
				if( strlen($defaultValue) )
					$this->regValues[ $f ] = $defaultValue;
			}
		}

		foreach($regFields as $fName)
		{
			$gfName = GoodFieldName($fName);
			
			$parameters = array();
			$parameters["id"] = $this->id;
			$parameters["mode"] = "add";
			$parameters["field"] = $fName;
			$parameters["value"] = $this->regValues[ $fName ];
			$parameters["pageObj"] = $this;
			$parameters["suggest"] = ($fName == $this->passwordFiled || $fName == $this->usernameFiled || $fName == $this->emailFiled);
				
			if( $this->pSet->getEditFormat($fName) == 'Time' )
				$this->fillTimePickSettings( $fName, @$this->regValues[ $fName ] );
			
			if( $fName == $this->passwordFiled )
			{
				$parameters["extraParams"] = array();
				$parameters["extraParams"]["getConrirmFieldCtrl"] = true;
				$this->jsSettings['tableSettings'][ $this->tName ]['passFieldName'] = $fName;
			}
			
			if( $fName == $this->usernameFiled )
				$this->jsSettings['tableSettings'][ $this->tName ]['userFieldName'] = $fName;
				
			if( $fName == $this->emailFiled )
				$this->jsSettings['tableSettings'][ $this->tName ]['emailFieldName'] = $fName;
				
			// Add validation
			if( $fName == $this->usernameFiled || $fName == $this->passwordFiled || $fName == $this->emailFiled )
				$parameters["validate"] = Array('basicValidate' => Array ( 'IsRequired' )); 
			else 
				$parameters["validate"] = $this->pSet->getValidation( $fName );
				
			$controls = array('controls' => array());
			$controls["controls"]["id"] = $this->id;
			$controls["controls"]["mode"] = "add";
			$controls["controls"]["ctrlInd"] = 0;
			$controls["controls"]['suggest'] = $parameters["suggest"];
			$controls["controls"]['fieldName'] = $fName;
				
			if( $this->is508 && $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
				$this->xt->assign_section($gfName."_label", "<label for=\"".$this->getInputElementId($fName)."\">", "</label>");
			
			$this->xt->assign($gfName."_fieldblock", true);
			$this->xt->assign($gfName."_tabfieldblock", true);

			if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{			
				$firstElementId = $this->getControl($fName, $this->id)->getFirstElementId();
				if ( $firstElementId )
				{
					$this->xt->assign("labelfor_" . goodFieldName($fName), $firstElementId);
				}
			}
				
			$this->xt->assign_function($gfName."_editcontrol", "xt_buildeditcontrol", $parameters );

			$preload = $this->fillPreload($fName, $regFields, $this->regValues);
			if( $preload !== false)
				$controls["controls"]['preloadData'] = $preload;
			
			$this->fillControlsMap( $controls );
			$this->fillFieldToolTips( $fName );
			$this->fillControlFlags( $fName, $fName == $this->usernameFiled || $fName == $this->passwordFiled || $fName == $this->emailFiled );
			
			// Confirm field for re-enter password
			if( $fName == $this->passwordFiled && $this->passwordFiled != $this->usernameFiled)
			{
				$parameters = array();
				$parameters["id"] = $this->id;
				$parameters["mode"] = "add";
				$parameters["field"] = "confirm";
				$parameters["format"] = "Password";
				$parameters["suggest"] = true;
				$parameters["pageObj"] = $this;
				$parameters["validate"]['basicValidate'] = array('IsRequired');
						
				$parameters["extraParams"] = array();
				$parameters["extraParams"]["isConfirm"] = true;
				$parameters["extraParams"]["getConrirmFieldCtrl"] = true;
						
				$controls = array('controls' => array());
				$controls["controls"]['id'] = $this->id;
				$controls["controls"]['mode'] = "add";
				$controls["controls"]['ctrlInd'] = 0;
				$controls["controls"]['suggest'] = true;
				$controls["controls"]['fieldName'] = "confirm";
						
				$this->xt->assign("confirm_label", true);
				if( $this->is508 )
					$this->xt->assign_section("confirm_label", "<label for=\"value_confirm_".$this->id."\">", "</label>");
					
				if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
				{			
					$this->xt->assign("labelfor_" . goodFieldName($fName) . "_confirm", "value_confirm_".$this->id);
				}

				$this->xt->assign_function("confirm_editcontrol1", "xt_buildeditcontrol", $parameters );
				$this->xt->assign("confirm_block", true);
				
				$this->fillControlsMap( $controls );
				$this->fillControlFlags( "confirm", true );
			}
		}	
	}
	
	/**
	 *
	 */
	protected function prepareReadonlyFields()
	{
		//	show readonly fields
		foreach( $this->pSet->getFieldsForRegister() as $uf )
		{
			if( $this->pSet->getEditFormat( $uf ) == EDIT_FORMAT_READONLY )
				$this->readOnlyFields[ $uf ] = $this->showDBValue( $uf , $this->regValues );
		}
	}
	
	/**
	 * Check is captcha exists on current page
	 *
	 * @intellisense
	 */
	function captchaExists()
	{
		$captchaSettings = GetGlobalData("CaptchaSettings", false);
		return $captchaSettings["isEnabledOnRegister"];
	}

	/**
	 * Get captcha field name
	 *
	 * @intellisense
	 */
	function getCaptchaFieldName()
	{		
		return "_register_captcha";
	}

	function getCaptchaId() 
	{
		return "register";
	}

	/**
	 *
	 */
	public function setDatabaseError( $message )
	{
		//global $strMessage;
		$this->message = $messageText;
	}

	function isMultistepped()
	{
		return $this->pSet->isRegisterMultistep();
	}
	
	/**
	 *
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("id", $this->id);
		$this->xt->assign("legend", true);
		
		$this->xt->assign("buttons_block", true);

		$this->xt->assign("message_block", true);
		if ( strlen($this->message) )
		{
			if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{	
				$messageClass = "alert-danger";
				if ( $this->registerSuccess )
				{
					$messageClass = "alert-success";
				}

				$this->xt->assign("message_class", $messageClass );
				$this->xt->assign("message", $this->message);
			}
			else
			{
				$this->xt->assign("message", "<div class='message rnr-error'>" . $this->message . "</div>" );
			}
		}
		else
			$this->xt->displayBrickHidden("message");	
		
		$addStyle = "";
		if ( $this->isMultistepped() )
			$addStyle = " style=\"display: none;\"";
		
		$this->xt->assign("submit_attrs", "id=\"saveButton".$this->id."\"" . $addStyle);		
		
		if( $this->registerSuccess )
		{
			$this->xt->assign("email", $this->strEmail);
			$this->xt->assign("activation_block", true);
		}
		if( $this->registerSuccess )
		{
			$this->xt->assign("registered_block", true);
			$this->xt->assign("loginlink_attrs","onclick=\"document.forms.loginform.submit();return false;\" id=\"ProceedToLogin\"");
			if( $this->mode == REGISTER_POPUP )
			{
				$this->xt->assign("close_win_btn", true);
				$this->xt->assign("closewindow_attrs", 'id="closeWindowRegister"');
			}
		}
		
		if( $this->mode == REGISTER_POPUP )
			$this->xt->assign("backlink_attrs", 'style="display:none"');
		if( $this->mode == REGISTER_SIMPLE )
			$this->assignBody();
	}
	
	/**
	 *
	 */
	protected function assignBody()
	{
		
		parent::assignBody();		
	}
	
	/**
	 *
	 */
	protected function showPage()
	{
		global $globalEvents;
		
		if( $this->registerSuccess )
		{
			$this->updatePageLayoutAndCSS("", "success");	
			$this->templatefile = GetTemplateName("", "register_success");
		}
		
		if( $globalEvents->exists("BeforeShowRegister") )
			$globalEvents->BeforeShowRegister($this->xt, $this->templatefile, $this);
			
		if ( $this->mode == REGISTER_POPUP ) 
		{
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body",  $this->body); //?  true fore register success ?
			
			$this->displayAJAX($this->templatefile, $this->id + 1);
			exit();
		}
						
		$this->display( $this->templatefile );
		return;				
	}
	
	/**
	 * @return Number
	 */
	public static function readRegisterModeFromRequest()
	{		
		if( postvalue("onFly") == 1 ) //fix it
			return REGISTER_POPUP;
			
		return REGISTER_SIMPLE;
	}
	
	/**
	 * @return String
	 */
	public static function readActionFromRequest()
	{	
		if( @$_POST["btnSubmit"] )
			return @$_POST["btnSubmit"];
			
		return postvalue("a");
	}
}
?>