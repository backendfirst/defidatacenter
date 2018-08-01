<?php

define('EMAIL_FOR_REPORTS', 'ahome_igb@yahoo.com.mx');
define('RECAPTCHA_PRIVATE_KEY', '6Le--A0UAAAAAHGNmfW6V8S3L9AWEvEaGtXOH8Zr');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Gracias por enviar sus datos, nuestro representante se pondra en contacto lo mas pronto posible.');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-biz-gold.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-biz-gold.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-biz-gold" style="background-color:#1A2223;font-size:14px;font-family:'Open Sans','Helvetica Neue', 'Helvetica', Arial, Verdana, sans-serif;color:#ECECEC;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Validar Certificados </h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"><span class="required">*</span></label><input class="null" type="text" name="input" required="required" placeholder="Nombre Completo"/></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"><span class="required">*</span></label><input class="null" type="text" name="input1" required="required" placeholder="Correo Electrónico"/></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title"><span class="required">*</span></label><input class="null" type="text" name="input2" required="required" placeholder="Teléfono"/></div>
	<div class="element-input<?php frmd_add_class("input3"); ?>"><label class="title"><span class="required">*</span></label><input class="null" type="text" name="input3" required="required" placeholder="Asunto"/></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"><span class="required">*</span></label><textarea class="null" name="textarea" cols="20" rows="5" required="required" placeholder="Mensaje"></textarea></div>
	<div class="element-recaptcha<?php frmd_add_class("captcha"); ?>" title="Favor de introducir los siguientes datos"><label class="title"></label><script type="text/javascript">var RecaptchaOptions = {theme : "clean"};</script>
<script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6Le--A0UAAAAAIc4N4N0NToJIbbzLayBk4z_zKsp&theme=clean"></script>
<noscript><iframe src="http://www.google.com/recaptcha/api/noscript?k=6Le--A0UAAAAAIc4N4N0NToJIbbzLayBk4z_zKsp&hl=en" height="300" width="500" frameborder="0"></iframe></br>
<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea><input type="hidden" name="recaptcha_response_field" value="manual_challenge"></noscript>
<script type="text/javascript">if (/#invalidcaptcha$/.test(window.location)) (document.getElementById("recaptcha_widget_div")).className += " error"</script></div>
<div class="submit"><input type="submit" value="Envar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-biz-gold.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>