<?php session_start(); if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { header("location:index.php"); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Client</title>
</head>
<body>
<div id="background"></div>
<div id="container">
	<div class="space"></div>	
	<p>You are logged in</p>
	<a href="inc/logout.php">Logout</a>
</div>
</body>
</html>
