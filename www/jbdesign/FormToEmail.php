<?php
$my_email = "justin-bull@hotmail.com";
$continue = "contact.html";
$errors = array();
// Remove $_COOKIE elements from $_REQUEST.
if(count($_COOKIE)){ 
	foreach(array_keys($_COOKIE) as $value){
		unset($_REQUEST[$value]);
	}
}
// Check all fields for an email header.
function recursive_array_check_header($element_value){
	global $set;
	if(!is_array($element_value)){
		if(preg_match("/(%0A|%0D|\n+|\r+)(content-type:|to:|cc:|bcc:)/i",$element_value)){
			$set = 1;
		}
	} else { 
		foreach($element_value as $value){
			if($set){
				break;
			}
			recursive_array_check_header($value);
		}
	}
}
recursive_array_check_header($_REQUEST);
if($set){
	$errors[] = "You cannot send an email header";
}
unset($set);
// Validate name field.
if(isset($_REQUEST['name']) && !empty($_REQUEST['name'])){
	if(preg_match("/[^a-z' -]/i",stripslashes($_REQUEST['name']))){
		$errors[] = "You have entered an invalid character in the name field";
	}
}
// Validate email field.
if(isset($_REQUEST['email']) && !empty($_REQUEST['email'])){
	if(preg_match("/(%0A|%0D|\n+|\r+|:)/i",$_REQUEST['email'])){
		$errors[] = "Email address may not contain a new line or a colon";
	}
	$_REQUEST['email'] = trim($_REQUEST['email']);
	if(substr_count($_REQUEST['email'],"@") != 1 || stristr($_REQUEST['email']," ")){
		$errors[] = "Email address is invalid";
	} else {
		$exploded_email = explode("@",$_REQUEST['email']);
		if(empty($exploded_email[0]) || strlen($exploded_email[0]) > 64 || empty($exploded_email[1])){
			$errors[] = "Email address is invalid";
		} else {
			if(substr_count($exploded_email[1],".") == 0 || substr_count($exploded_email[1],".") > 3){
				$errors[] = "Email address is invalid";
			} else {
				$exploded_domain = explode(".",$exploded_email[1]);
				if(in_array("",$exploded_domain)){
					$errors[] = "Email address is invalid";
				} else {
					foreach($exploded_domain as $key => $value){
						if($key == 0){
							if(strlen($value) > 63 || !preg_match('/^[a-z0-9-]+$/i',$value)){
								$errors[] = "Email address is invalid";
								break;
							}
						} elseif(strlen($value) > 6 || !preg_match('/^[a-z0-9]+$/i',$value)){
							$errors[] = "Email address is invalid";
							break;	
						}
					}
				}
			}
		}
	}
}
// Remove leading whitespace from all values.
function recursive_array_check(&$element_value){
	if(!is_array($element_value)){
		$element_value = ltrim($element_value);
	} else {
		foreach($element_value as $key => $value){
			$element_value[$key] = recursive_array_check($value);
		}
	}
	return $element_value;
}
recursive_array_check($_REQUEST);
// Check referrer is from same site.
if(!(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))){
	$errors[] = "You must enable referrer logging to use the form";
}
// Check for a blank form.
function recursive_array_check_blank($element_value){
	global $set;
	if(!is_array($element_value)){
		if(!empty($element_value)){
			$set = 1;
		}
	} else {
		foreach($element_value as $value){
			if($set){
				break;
			}
			recursive_array_check_blank($value);
		}
	}
}
recursive_array_check_blank($_REQUEST);
if(!$set){
	$errors[] = "You cannot send a blank form";
}
unset($set);
// Display any errors and exit if errors exist.
if(count($errors)){
	foreach($errors as $value){
		print "$value<br>";
	}
	exit;
}
if(!defined("PHP_EOL")){
	define("PHP_EOL", strtoupper(substr(PHP_OS,0,3) == "WIN") ? "\r\n" : "\n");
}
// Build message.
function build_message($request_input){
	if(!isset($message_output)){
		$message_output ="";
	}
	if(!is_array($request_input)){
		$message_output = $request_input;
	} else {
		foreach($request_input as $key => $value){
			if(!empty($value)){
				if(!is_numeric($key)){
					$message_output .= str_replace("_"," ",ucfirst($key)).": ".build_message($value).PHP_EOL.PHP_EOL;
				} else {
					$message_output .= build_message($value).", ";
				}
			}
		}
	}
	return rtrim($message_output,", ");
}
$message = build_message($_REQUEST);
$message = $message . PHP_EOL.PHP_EOL."-- ".PHP_EOL."Thank you for using FormToEmail from http://FormToEmail.com";
$message = stripslashes($message);
$subject = "FormToEmail Comments";
$headers = "From: " . $_REQUEST['email'];
mail($my_email,$subject,$message,$headers);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>JB Design Studio Sent</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="JB Design Studio offers web design service for the future. We integrate art and technology to produce original design solutions." />
		<meta name="keywords" content="jb, design, studio, art, technology, web, design, development, trademark, brand, corporate, business, company, identity, professional, service, site, page, net, future, modern, graphic, advocate, promotional, e-commerce, content, portal, or personal, technologies, artistic, creative, original, unique, innovative, expert, expertise, canadian, canada, bc, product, gallery, blog, resume" /> 
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
		<div id="master">
			<div id="header">
			<!--Header Image Area-->
			</div><!--END ID Header-->
			<div class="tb"></div>
			<div class="nav">
				<a href="index.html">House</a>
				<a href="about.html">About</a>
				<a href="services.html">Services</a>
				<a href="resume.html">Resume</a>
				<a href="gallery.html">Gallery</a>
				<a href="http://justinbull.wordpress.com">Blog</a>
				<a href="contact.html" class="select">Contact</a>
			</div><!--END ID Nav-->
			<div class="bb"></div>
			<div class="tb"></div>
			<div id="content" class="nav center">
				<h1>Form Successful</h1>
				<p>Thank you <?php print stripslashes($_REQUEST['name']); ?></p>
				<p>Your message has been sent</p>
				<br />
				<p><a href="<?php print $continue; ?>">Back</a></p>
				<br />
				<p><strong>FormToEmail</strong> by FormToEmail.com</p>
				<br />
			</div><!--END ID Content-->
			<div class="bb"></div>
			<div class="center">
				<a href="http://validator.w3.org/check?uri=referer">
				<img src="images/xhtml_valid.gif" alt="Valid XHTML 1.0 Transitional" /></a>
				<a href="http://jigsaw.w3.org/css-validator">
				<img src="images/css_valid.gif" alt="Valid CSS" /></a>
				<p class="copy">|&copy; 2007 Justin Bull|</p>
			</div>
		</div><!--END ID Master-->
	</body>
</html>