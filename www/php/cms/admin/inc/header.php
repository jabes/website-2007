<?php
session_start();
if (!isset($_SESSION['admin_email']) && !isset($_SESSION['admin_passwd']) && !isset($_SESSION['admin_privileges'])) { header("location:../index.php"); }
else { $login = "<a href='../inc/logout.php'>Logout</a>"; $user = $_SESSION['user']; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>ATV Online</title>
<link href="../stylesheet.css" rel="stylesheet" type="text/css" />
</head>
