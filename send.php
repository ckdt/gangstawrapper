<?php 
/* ##### Handing the form ##### */
require 'lib/PHPMailerAutoload.php';

$to_email = 'ronny@ckdt.nl';
$to_shortname = 'Ronny';
$to_name = 'Ronny Wieckardt';
$subject = 'New Business Request';

if (!empty($_POST)) {

	$name = (isset($_POST['form_name'])) ? $_POST['form_name'] : '';
	$email = (isset($_POST['form_email'])) ? $_POST['form_email'] : '';
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

	$m = "Dear ".$to_shortname.", \n\n";
	$m.= "You have a new business request. Yay! \n\n";
	$m.= "The project is for ".$company.", ".$city.", ".$website." \n";
	$m.= $name." likes you to start ". $planning." and has a budget of ".$budget."\n";
	$m.= "They've been in business for ".$years." year(s) and are targeting ".$target."\n\n";
	$m.= "Description:\n".$description."\n";
	$m.= "Competition:\n".$competition."\n\n";
	$m.= "Please call ".$name." on ".$phone."\nOr reply to this e-mail \n\n";
	$m.= "You're the man! \n\n";
	$m.= "Cheers,\n- Ronbot \n\n";
	
	// If form submitted
	$mail = new PHPMailer;
	//$mail->isSendmail();

	//Set who the message is to be sent from
	$mail->setFrom($email, $name);

	$mail->addReplyTo($to_email, $to_name);
	$mail->addAddress($to_email, $to_name);
	$mail->Subject = $subject;
	$mail->Body = $m;

	//send the message, check for errors
	if (!$mail->send()) {
	    echo '<span class="error">Mailer Error: '.$mail->ErrorInfo.' </span>';
	} else {
	    echo '<span class="ok">Thank you for your Business.</span>';
	}
}
?>