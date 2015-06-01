# gangstawrapper

In order for this to work you should...
Create a new file called: `settings.mailer.php` in the `lib/` folder.

And put the following code in `settings.mailer.php` file

	<?php
	// Mail account to use for SMTP sending via GMAIL
	$gmail_username = ""; // Full e-mail address
	$gmail_password = "";

	// Where you want your stuff to go
	$to_email = 'r.wieckardt@gmail.com';
	$to_shortname = 'Ronny';
	$to_name = 'Ronny Wieckardt';
	$to_site = 'ronnywieckardt.nl';
	$subject = 'NBS - Website request';
	$subject_thanks = 'Thank you for your request';
	
Make sure `lib/settings.mailer.php` is mentioned in the `.gitignore` file in order for you to not upload your credentials to github

used premailer.dialect.ca for mail-template compiling