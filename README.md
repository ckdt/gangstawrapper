# gangstawrapper

In order for this to work you should...
Create a new file called: `settings.mailer.php` in the `lib/` folder.

And put the following code in `settings.mailer.php` file

	// Mail account to use for SMTP sending via GMAIL
	$gmail_username = "YOUR_USERNAME"; // Full gmail e-mail address
	$gmail_password = "YOUR_PASSWORD";

	// Where you want your stuff to go
	$to_email = 'YOUR_EMAIL';
	$to_shortname = 'YOUR_FIRST_NAME';
	$to_name = 'YOUR_FULL_NAME';
	$subject = 'YOUR_SUBJECT';
	
Make sure `lib/settings.mailer.php` is mentioned in the `.gitignore` file in order for you to not upload your credentials to github