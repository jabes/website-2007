<!-- | © Copyright 2007 Justin Bull | All rights reserved | -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="www.JBull.ca is my personal website. Its purpose is to present my media developments in an organized fashion." />
<title>Home</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link rel="shortcut icon" href="../images/favicon.ico" />
<!--[if IE]><link rel="stylesheet" href="../css/iefix.css" type="text/css" /><![endif]-->
</head>
<?php $add = $_POST['add']; ?>
<body>
<div id="master">
	<!--[if lte IE 6]>
		<div id="error">
			<p>This page utilizes features not available with Internet Explorer 6. Please update to a more recent version
			<a href="http://www.microsoft.com/windows/downloads/ie/getitnow.mspx" target="_blank">here</a>.</p>
		</div>
	<![endif]-->
	<div id="header"></div>
	<div id="content">
		<div class="subheader">
			<h1>Add Client</h1>
		</div>
		<div class="subcontent">
			<?php if ($add) {
			$first = $_POST['first'];
			$last = $_POST['last'];
			$city = $_POST['city'];
			$province = $_POST['province'];
			$postal = $_POST['postal'];
			$country = $_POST['country'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$passwd = $_POST['passwd'];
			$confirm = $_POST['confirm']; ?>
			<?php include('inc/errors.php'); ?>
			<?php } else { ?>
			<p><a href="clients.php">View All Clients</a></p>
			<h2 class="center">Customer Application Form</h2>
			<?php include('inc/form.php'); ?>
			<?php } ?>
		</div>
		<div class="subfooter"></div>
		<div class="break"></div>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
