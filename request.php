<?php
// Timezone
date_default_timezone_set('Etc/UTC');

// PHPMailer
require 'lib/PHPMailerAutoload.php';

// Your E-mail Settings
require 'lib/settings.mailer.php';

// After Form Submit
if (!empty($_POST)) {

	// Post variables ####################################################################
	$from_name = (isset($_POST['form_name'])) ? $_POST['form_name'] : '';
	$from_email = (isset($_POST['form_email'])) ? $_POST['form_email'] : '';
	$phone = (isset($_POST['form_phone'])) ? $_POST['form_phone'] : '';

	$company = (isset($_POST['form_company'])) ? $_POST['form_company'] : '';
	$city = (isset($_POST['form_city'])) ? $_POST['form_city'] : '';
	$website = (isset($_POST['form_website'])) ? $_POST['form_website'] : '';

	$years = (isset($_POST['form_years'])) ? $_POST['form_years'] : '';
	$target = (isset($_POST['form_target'])) ? $_POST['form_target'] : '';
	$description = (isset($_POST['form_description'])) ? $_POST['form_description'] : '';
	$competition = (isset($_POST['form_competition'])) ? $_POST['form_competition'] : '';

	$types = array();

	$type1 = (isset($_POST['form_type_webdesign'])) ? array_push($types, 'webdesign') : '';
	$type2 = (isset($_POST['form_type_appdesign'])) ? array_push($types, 'appdesign') : '';
	$type3 = (isset($_POST['form_type_consulting'])) ? array_push($types, 'consulting') : '';
	$type4 = (isset($_POST['form_type_other'])) ? array_push($types, 'other') : '';

	$types_string = implode(", ", $types);

	$planning = (isset($_POST['form_timeline'])) ? $_POST['form_timeline'] : '';
	$budget = (isset($_POST['form_budget'])) ? $_POST['form_budget'] : '';
	// Post variables ####################################################################

	// Setup PHPMailer
	$mail = new PHPMailer;
	$mail->isSMTP();

	// Debug (set to 0 live)
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';

	$mail->Host = 'www58.totaalholding.nl';
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;

	// E-mail account
	$mail->Username = $gmail_username;
	$mail->Password = $gmail_password;

	// Addressing
	$mail->setFrom($from_email, $from_name);
	$mail->addReplyTo($from_email, $from_name);
	$mail->addAddress($to_email, $to_name);
	$mail->Subject = $subject;


	// Setup Message
	$m = file_get_contents('lib/templates/mail-request.html');

	$m = str_replace('%to_name%', $to_name, $m);
	$m = str_replace('%to_email%', $to_email, $m);
	$m = str_replace('%to_shortname%', $to_shortname, $m);
	
	$m = str_replace('%name%', $from_name, $m);
	$m = str_replace('%email%', $from_email, $m);
	$m = str_replace('%phone%', $phone, $m);
	$m = str_replace('%company%', $company, $m);
	$m = str_replace('%city%', $city, $m);
	$m = str_replace('%website%', $website, $m);
	$m = str_replace('%years%', $years, $m);
	$m = str_replace('%target%', $target, $m);
	$m = str_replace('%description%', $description, $m);
	$m = str_replace('%competition%', $competition, $m);
	$m = str_replace('%types_string%', $types_string, $m);
	$m = str_replace('%planning%', $planning, $m);
	$m = str_replace('%budget%', $budget, $m);
	$m = str_replace('%from_site%', $to_site, $m);
	//$m_txt = strip_tags($m);

	$mail->msgHTML($m, dirname(__FILE__));
	//$mail->AltBody($m_txt);

	//send the message, check for errors
	if (!$mail->send()) {
		// First mail fails //
	    echo '<span class="error">Mailer Error: '.$mail->ErrorInfo.' </span>';
	} else {
		// First mail success //
		// echo '<span class="ok">Thank you for your Business.</span>';
	    $mail->ClearAddresses();
	  	$mail->ClearAttachments();

		$mail->setFrom($gmail_username , $to_name);
		$mail->addReplyTo($to_email, $to_name);
	  	$mail->addAddress($from_email , $from_name);
		$mail->Subject = $subject_thanks;
		
		$t = file_get_contents('lib/templates/mail-thanks.html');
		$t = str_replace('%name%', $from_name, $t);
		$t = str_replace('%from_person%', $to_name, $t);
		$t = str_replace('%from_site%', $to_site, $t);

		$mail->msgHTML($t, dirname(__FILE__));

	  	if (!$mail->send()) {
	  		// Second mail fails //
	    	echo '<span class="error">Mailer Error: '.$mail->ErrorInfo.' </span>';
		} else {
			// Second mail success //
	    	echo '<span class="ok">Thank you for your Business.</span>';
		}


	}
}