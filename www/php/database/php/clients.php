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
			<h1>View Clients</h1>
		</div>
		<div class="subcontent">
			<p><a href="index.php">Add Another Client</a></p>
			<?php include('inc/dbconnect.php');
			$result = mysql_query("SELECT * FROM clients");
			while ($row = mysql_fetch_array($result)) {
			$clientid = $row['clientid'];
			$first = $row['first'];
			$last = $row['last'];
			$email = $row['email'];
			$phone = $row['phone'];
			$city = $row['city'];
			$province = $row['province'];
			$country = $row['country'];
			$postal = $row['postal']; ?>
			<h2>Client ID: <?php echo $clientid; ?></h2>
			<p>First Name: <?php echo $first; ?></p>
			<p>Last Name: <?php echo $last; ?></p>
			<p>Email: <?php echo $email; ?></p>
			<p>Phone: <?php echo $phone; ?></p>
			<p>City: <?php echo $city; ?></p>
			<p>Province: <?php echo $province; ?></p>
			<p>Country: <?php echo $country; ?></p>
			<p>Postal Code: <?php echo $postal; ?></p>
			<?php } ?>
		</div>
		<div class="subfooter"></div>
		<div class="break"></div>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
