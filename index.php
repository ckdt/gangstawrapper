<?php 
if(isset($_GET["lang"])){
    $lang = $_GET["lang"];
}else{
    $lang = "en";
}
$local = array(
    "en" => array(
    	"langcode" => "en_EN",
		"html_title" => "Ronny Wieckardt &mdash; Web / App &amp; Interaction Design &mdash; Rotterdam, The Netherlands",
		"html_description" => "The portfolio of Ronny Wieckardt. Interactive Designer based in Rotterdam, The Netherlands. Specialized in user centered; digital, interaction, web and app design.",
		"html_author" => "Ronny Wieckardt",
		"html_alt_title" => "Online portfolio of Ronny Wieckardt.",
		"html_alt_description" => "Check out the work of Interaction &amp; Digital Design Director, Ronny Wieckardt",
		"photo_credit_text" => "Photo by",
		"photo_credit_author" => "Casper Rila",
		"intro_title" => "Hello, My name is Ronny Wieckardt. I’m an interaction &amp; visual interface designer from Rotterdam, The Netherlands. I’m a big fan of user centered design. With passion for minimal design, branding and technology I aim to create high quality user friendly products.",
		"intro_title_section_one" => "Studio",
		"intro_section_one" => "I work as a freelance designer from my studio in the centre of Rotterdam. I approach each project differently, based on its needs. For complexer projects I assemble a team of creative producers, from my network. Together we help you achieve your goals. My studio partner <a href=\"http://maartenmieras.nl\" target=\"_blank\">Maarten Mieras</a> and I are currently thinking of new ways to do awesome projects.",
		"intro_title_section_two" => "Skills",
		"intro_section_two" => "user interface design, user experience design, interaction design, (responsive) website design, mobile app design, prototyping, design direction, creative concept development, visual design, branding, front-end development, WordPress development",
		"intro_button_cta" => "Let's do business together",
		"intro_button_cta_close" => "Nevermind",
		"intro_title_section_three" => "Contact",
		"intro_section_three_contact" => "Ronny Wieckardt <a href=\"mailto:hi@ronnywieckardt.nl\">hi@ronnywieckardt.nl</a> +31(0)6 18112260",
		"intro_section_three_address" => "RAUM | R04 Stadhuisplein 9-15 3012 AR, Rotterdam The Netherlands",
		"intro_social_linkedin" => "rwieckardt",
		"intro_social_twitter" => "@rwieckardt",
		"intro_social_behance" => "selected work",
		"intro_legal" => "<a href=\"http://ckdt.nl/algemene_voorwaarden.pdf\">Terms and Conditions</a>, BTW: NL173837839B02, BANK: NL59 RABO 0159415292, KVK: 51217805",
		"form_intro_title" => "The Introduction",
		"form_field_name" => "Name",
		"form_field_email" => "E-mail",
		"form_field_phone" => "Phone",
		"form_field_company" => "Company",
		"form_field_city" => "City",
		"form_field_website" => "Website",
		"form_title_section_one" => "Your Business",
		"form_years" => "Years in business",
		"form_target" => "Target Audience",
		"form_description" => "Company Description",
		"form_competition" => "Competition",
		"form_title_section_two" => "The Project",
		"form_type_webdesign" => "Webdesign",
		"form_type_appdesign" => "App Design",
		"form_type_consulting" => "Consulting",
		"form_type_other" => "Other",
		"form_timeline" => "Timeline",
		"form_timeline_question" => "When do you want to start?",
		"form_timeline_opt_one" => "This month",
		"form_timeline_opt_two" => "Next month",
		"form_timeline_opt_three" => "Within two months",
		"form_timeline_opt_four" => "Within three months",
		"form_timeline_opt_five" => "We haven't set a timeline yet",
		"form_budget" => "Budget",
		"form_budget_question" => "What is your budget?",
		"form_submit" => "Submit"
	),
    "nl" => array(
    	"langcode" => "nl_NL",
    	"html_title" => "Ronny Wieckardt &mdash; Web / App &amp; Interactie ontwerper &mdash; Rotterdam, Nederland",
		"html_description" => "De portfolio van Ronny Wieckardt. Interactie ontwerper uit Rotterdam, Nederland. Gespecialiseerd in; digitaal, interactie, web en app ontwerp. Waarbij de gebruiker centraal staat.",
		"html_author" => "Ronny Wieckardt",
		"html_alt_title" => "Online portfolio van Ronny Wieckardt.",
		"html_alt_description" => "Bekijk het werk van Interactie &amp; Digitaal Vormgever, Ronny Wieckardt",
		"photo_credit_text" => "Foto door",
		"photo_credit_author" => "Casper Rila",
		"intro_title" => "Hallo, Ik ben Ronny Wieckardt. Een interactie &amp; user interface ontwerper uit Rotterdam, Nederland. Ik hou van ontwerp waarbij de eindgebruiker centraal staat. Met een voorliefde voor minimaal ontwerp, branding en technologie, maak ik hoge kwaliteit maatwerk waar de gebruiker blij van wordt.",
		"intro_title_section_one" => "Studio",
		"intro_section_one" => "Ik werk als freelance ontwerper vanuit mijn studio in het centrum van Rotterdam. Elk project pak ik anders aan, op basis van de vereisten. Voor grotere projecten, stel ik teams van professionals samen uit mijn netwerk van creatieve voorlopers. Zo kan ik u helpen uw doelstellingen te bereiken. Momenteel ben ik aan het onderzoeken hoe ik, samen met mijn studio partner <a href=\"http://maartenmieras.nl\" target=\"_blank\">Maarten Mieras</a>, diensten nog beter aan kan bieden.",
		"intro_title_section_two" => "Kennis",
		"intro_section_two" => "user interface design, user experience design, interactie ontwerp, (responsive) website ontwerp, mobile app ontwerp, prototyping, ontwerptrajecten begeleiden, creatieve conceptontwikkeling, visueel ontwerp, branding, front-end ontwikkeling, WordPress ontwikkeling",
		"intro_button_cta" => "Laten we samenwerken!",
		"intro_button_cta_close" => "Sluit formulier",
		"intro_title_section_three" => "Contact",
		"intro_section_three_contact" => "Ronny Wieckardt <a href=\"mailto:hi@ronnywieckardt.nl\">hi@ronnywieckardt.nl</a> +31(0)6 18112260",
		"intro_section_three_address" => "RAUM | R04 Stadhuisplein 9-15 3012 AR, Rotterdam Nederland",
		"intro_social_linkedin" => "rwieckardt",
		"intro_social_twitter" => "@rwieckardt",
		"intro_social_behance" => "geselecteerd werk",
		"intro_legal" => "<a href=\"http://ckdt.nl/algemene_voorwaarden.pdf\">Algemene Voorwaarden</a>, BTW: NL173837839B02, BANK: NL59 RABO 0159415292, KVK: 51217805",
		"form_intro_title" => "Introductie",
		"form_field_name" => "Naam",
		"form_field_email" => "E-mail",
		"form_field_phone" => "Telefoon",
		"form_field_company" => "Bedrijf",
		"form_field_city" => "Stad",
		"form_field_website" => "Website",
		"form_title_section_one" => "Uw bedrijf",
		"form_years" => "Jaar actief",
		"form_target" => "Doelgroep",
		"form_description" => "Bedrijfsprofiel",
		"form_competition" => "Concurrenten",
		"form_title_section_two" => "Het project",
		"form_type_webdesign" => "Webontwerp",
		"form_type_appdesign" => "App Ontwerp",
		"form_type_consulting" => "Consult",
		"form_type_other" => "Anders",
		"form_timeline" => "Planning",
		"form_timeline_question" => "Wanneer wilt u dat we beginnen?",
		"form_timeline_opt_one" => "Deze maand",
		"form_timeline_opt_two" => "Volgende maand",
		"form_timeline_opt_three" => "Binnen 2 maanden",
		"form_timeline_opt_four" => "Binnen 3 maanden",
		"form_timeline_opt_five" => "We hebben nog geen planning",
		"form_budget" => "Budget",
		"form_budget_question" => "Wat is uw budget?",
		"form_submit" => "Verstuur"
    )
);
?>
<!doctype html>
<html class="no-js" lang="<?php echo $local[$lang]["langcode"]; ?>">
<head>
		<meta charset="utf-8"/>
		<title><?php echo $local[$lang]["html_title"]; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php echo $local[$lang]["html_description"]; ?>">
		<meta name="author" content="<?php echo $local[$lang]["html_author"]; ?>">
		
		<meta property="og:image" content="http://ronnywieckardt.nl/img/favicons/favicon-1024.png"/> 
		<meta property="og:title" content="<?php echo $local[$lang]["html_title"]; ?>"/>
		<meta property="og:url" content="http://ronnywieckardt.nl"/>
		<meta property="og:site_name" content="<?php echo $local[$lang]["html_alt_title"]; ?>"/>
		<meta property="og:type" content="website"/>
		<meta property="og:description" content="<?php echo $local[$lang]["html_alt_description"]; ?>"/>

		<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">

		<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">

		<link rel="shortcut icon" href="favicon.ico">
		<link rel="manifest" href="img/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#c09c62">
		<meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
		<meta name="theme-color" content="#c09c62">

		<link rel="stylesheet" href="css/materialize.min.css" />
		<link rel="stylesheet" href="css/style.css" />

		<script src="//use.typekit.net/jyl6nli.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-63495031-1', 'auto');
		ga('send', 'pageview');
		</script>
</head>
<body>
	<div id="gangsta-wrapper">
		<div class="lang-toggle">
			<?php if($_GET["lang"] == "nl"): ?>
			<a href="/en">en</a>
			<?php else: ?>
			<a href="/nl">nl</a>
			<?php endif; ?>
		</div>
		<div id="the-info">
			<h1><?php echo $local[$lang]["intro_title"]; ?></h1>
			
			<h5><?php echo $local[$lang]["intro_title_section_one"]; ?></h5>
			<p><?php echo $local[$lang]["intro_section_one"]; ?></p>

			<h5><?php echo $local[$lang]["intro_title_section_two"]; ?></h5>
			<p><?php echo $local[$lang]["intro_section_two"]; ?></p>

			<a href="#the-masterplan" class="btn-business btn-track" data-track-cat="new business" data-track-action="form opened" data-local-open="<?php echo $local[$lang]["intro_button_cta"]; ?>" data-local-close="<?php echo $local[$lang]["intro_button_cta_close"]; ?>"><?php echo $local[$lang]["intro_button_cta"]; ?></a>

			<h5><?php echo $local[$lang]["intro_title_section_three"]; ?></h5>
			<address>
				<?php echo $local[$lang]["intro_section_three_contact"]; ?>
			</address>
			<address>
				<?php echo $local[$lang]["intro_section_three_address"]; ?>
			</address>
			<div class="cf"></div>
			<ul class="socialize">
				<li><a href="http://www.twitter.com/rwieckardt" target="_blank"> <img src="img/icons/socicon_twitter.svg" class="ico" width="16"><?php echo $local[$lang]["intro_social_twitter"]; ?></a></li>
				<li><a href="http://nl.linkedin.com/in/rwieckardt" target="_blank"> <img src="img/icons/socicon_linkedin.svg" class="ico" width="14" ><?php echo $local[$lang]["intro_social_linkedin"]; ?></a></li>
				<li><a href="https://www.behance.net/hellomynameisronny" target="_blank"> <img src="img/icons/socicon_behance.svg" class="ico" width="16" ><?php echo $local[$lang]["intro_social_behance"]; ?></a></li>
			</ul>
			<small><?php echo $local[$lang]["intro_legal"]; ?></small>
		</div>
		<div id="the-masterplan">
			<div class="sender">
				<svg width='116px' height='116px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-default"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(0 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(24 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.06666666666666667s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(48 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.13333333333333333s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(72 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.2s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(96 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.26666666666666666s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(120 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.3333333333333333s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(144 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(168 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.4666666666666667s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(192 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.5333333333333333s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(216 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(240 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.6666666666666666s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(264 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.7333333333333333s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(288 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(312 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.8666666666666667s' repeatCount='indefinite'/></rect><rect  x='48' y='47.5' width='4' height='5' rx='0' ry='0' fill='#ffffff' transform='rotate(336 50 50) translate(0 -20)'>  <animate attributeName='opacity' from='1' to='0' dur='1s' begin='0.9333333333333333s' repeatCount='indefinite'/></rect></svg>
			</div>
			<div class="sender-result row">
				<div class="col s12">
					<h3 id="result"><?php echo $local[$lang]["intro_button_cta"]; ?></h3>
				</div>
			</div>
			<form method="post" action="request.php" id="nbs_form">
				<div class="row">
					<div class="col s12">
						<h3><?php echo $local[$lang]["intro_button_cta"]; ?></h3>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<h5><?php echo $local[$lang]["form_intro_title"]; ?></h5>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l4">
						<input id="form_name" name="form_name" type="text" class="validate" required>
						<label for="form_name"><?php echo $local[$lang]["form_field_name"]; ?></label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input id="form_email" name="form_email" type="email" class="validate" required>
						<label for="form_email"><?php echo $local[$lang]["form_field_email"]; ?></label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input id="form_phone" name="form_phone" type="text" class="validate">
						<label for="form_phone"><?php echo $local[$lang]["form_field_phone"]; ?></label>
					</div>
				</div>
				<div class="row last">
					<div class="input-field col s12 m6 l4">
						<input id="form_company" name="form_company" type="text" class="validate">
						<label for="form_company"><?php echo $local[$lang]["form_field_company"]; ?></label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input id="form_city" name="form_city" type="text" class="validate">
						<label for="form_city"><?php echo $local[$lang]["form_field_city"]; ?></label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input id="form_website" name="form_website" type="text" class="validate">
						<label for="form_website"><?php echo $local[$lang]["form_field_website"]; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<h5><?php echo $local[$lang]["form_title_section_one"]; ?></h5>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6 m6 l4">
						<input id="form_years" name="form_years" type="text" class="validate">
						<label for="form_years"><?php echo $local[$lang]["form_years"]; ?></label>
					</div>
					<div class="input-field col s6 m6 l4">
						<input id="form_target" name="form_target" type="text" class="validate">
						<label for="form_target"><?php echo $local[$lang]["form_target"]; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m12 l8">
						<textarea id="form_description" name="form_description" class="materialize-textarea validate"></textarea>
						<label for="form_description"><?php echo $local[$lang]["form_description"]; ?></label>
					</div>
				</div>
				<div class="row last">
					<div class="input-field col s12 m12 l8">
						<textarea id="form_competition" name="form_competition" class="materialize-textarea validate"></textarea>
						<label for="form_competition"><?php echo $local[$lang]["form_competition"]; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<h5><?php echo $local[$lang]["form_title_section_two"]; ?></h5>
					</div>
				</div>
				<div class="row last">
					<div class="input-field check col s6 m3 l3">
						<div>
							<input type="checkbox" class="filled-in" id="form_type_webdesign" name="form_type_webdesign" />
							<label for="form_type_webdesign"><?php echo $local[$lang]["form_type_webdesign"]; ?></label>
						</div>
					</div>
					<div class="input-field check col s6 m3 l3">
						<div>
							<input type="checkbox" class="filled-in" id="form_type_appdesign" name="form_type_appdesign" />
							<label for="form_type_appdesign"><?php echo $local[$lang]["form_type_appdesign"]; ?></label>
						</div>
					</div>
					<div class="input-field check col s6 m3 l3">
						<div>
							<input type="checkbox" class="filled-in" id="form_type_consulting" name="form_type_consulting" />
							<label for="form_type_consulting"><?php echo $local[$lang]["form_type_consulting"]; ?></label>
						</div>
					</div>
					<div class="input-field check col s6 m3 l3">
						<div>
							<input type="checkbox" class="filled-in" id="form_type_other" name="form_type_other" />
							<label for="form_type_other"><?php echo $local[$lang]["form_type_other"]; ?></label>
						</div>
					</div>
				</div>
				<div class="row last">
					<div class="input-field col s12 m6 l6">
						<select id="form_timeline" name="form_timeline">
							<option value="" disabled selected><?php echo $local[$lang]["form_timeline_question"]; ?></option>
							<option value="<?php echo $local[$lang]["form_timeline_opt_one"]; ?>"><?php echo $local[$lang]["form_timeline_opt_one"]; ?></option>
							<option value="<?php echo $local[$lang]["form_timeline_opt_two"]; ?>"><?php echo $local[$lang]["form_timeline_opt_two"]; ?></option>
							<option value="<?php echo $local[$lang]["form_timeline_opt_three"]; ?>"><?php echo $local[$lang]["form_timeline_opt_three"]; ?></option>
							<option value="<?php echo $local[$lang]["form_timeline_opt_four"]; ?>"><?php echo $local[$lang]["form_timeline_opt_four"]; ?></option>
							<option value="<?php echo $local[$lang]["form_timeline_opt_five"]; ?>"><?php echo $local[$lang]["form_timeline_opt_five"]; ?></option>
						</select>
						<label><?php echo $local[$lang]["form_timeline"]; ?></label>
					</div>
					<div class="input-field col s12 m6 l6">
						<select id="form_budget" name="form_budget">
							<option value="" disabled selected><?php echo $local[$lang]["form_budget_question"]; ?></option>
							<option value="&lt; &euro;5.000">&lt; &euro;5.000</option>
							<option value="&euro;5.000 &mdash; &euro;10.000">&euro;5.000 &mdash; &euro;10.000</option>
							<option value="&euro;10.000 &mdash; &euro;15.000">&euro;10.000 &mdash; &euro;15.000</option>
							<option value="&euro;15.000 &mdash; &euro;30.000">&euro;15.000 &mdash; &euro;30.000</option>
							<option value="&euro;30.000 &mdash; &euro;50.000">&euro;30.000 &mdash; &euro;50.000</option>
							<option value="&euro;50.000 &mdash; &euro;75.000">&euro;50.000 &mdash; &euro;75.000</option>
							<option value="&euro;75.000 &mdash; &euro;100.000">&euro;75.000 &mdash; &euro;100.000</option>
							<option value="&gt; &euro;100.000">&gt; &euro;100.000</option>
						</select>
						<label><?php echo $local[$lang]["form_budget"]; ?></label>
					</div>
				</div>
				<div class="row last">
					<div class="col s6">
						<button class="btn btn-large waves-effect waves-light btn-track" type="submit" name="action" id="form_submit" data-track-cat="new business" data-track-action="form sent"><?php echo $local[$lang]["form_submit"]; ?></button>
					</div>
				</div>
			</form>
		</div>
		<div id="the-man">
			<div class="photo-credits"><?php echo $local[$lang]["photo_credit_text"]; ?> <a href="http://500watt.nl" target="_blank"><?php echo $local[$lang]["photo_credit_author"]; ?></a></div>
		</div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('select').material_select();

			$( ".btn-track" ).each(function(index) {
				$(this).on("click", function(){
					var cat =  $(this).attr('data-track-cat');
					var action = $(this).attr('data-track-action');
					console.log(cat,action);
					ga('send', 'event', cat , action);
				});
			});

			$('.btn-business').click(function(e) {
				e.preventDefault();
				$('#the-masterplan').toggleClass( "doing-business" );
				$('#the-info').toggleClass( "inactive" );
				if($('#the-masterplan').hasClass("doing-business")){
					$(this).empty().html($(this).attr('data-local-close'));
				}else{
					$(this).empty().html($(this).attr('data-local-open'));
				}
			});

			$('#nbs_form').submit(function(e) {
				e.preventDefault();

				// Disable button
				$('#form_submit').attr("disabled", true);
				$('#nbs_form').fadeOut().delay(400);
				$('.sender').fadeIn().delay(400);
				
				var $form = $( this );
				var url = $form.attr( "action" );
				var posting = $.post( url, $form.serialize() );
				posting.done(function( data ) {
					$('.sender').fadeOut();
					
					$( "#result" ).html(data).delay(800);
					$( ".sender-result" ).fadeIn().delay(800);
					

					$( '#nbs_form' ).each(function(){
   				 		this.reset();
					});

					setTimeout(function() {
						// Toggle Form
						$('#the-masterplan').removeClass("doing-business");
						$('#the-info').removeClass("inactive");
						$(this).empty().html($(this).attr('data-local-open'));

						// Re-enable Form
						$('#result').empty();
						$('#nbs_form').fadeIn("slow").delay(3000);
						$('#form_submit').attr("disabled", false);
					}, 8000);

				});
			});
		});
	</script>
</body>
</html>
