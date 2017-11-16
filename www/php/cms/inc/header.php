<?php
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['passwd'])) { 
$login = "<form id='login' name='login' method='post' action='inc/login.php'><input name='email' type='text' size='24' /><input name='passwd' type='password' size='24' /><input class='login' name='submit' type='submit' value='Login' /><span>| </span><a href='registration.php'>Register</a></form>"; $user = "Guest"; }
else { $login = "<a href='edit.php'>Edit</a> | <a href='inc/logout.php'>Logout</a>"; $user = $_SESSION['user']; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>ATV Online</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>
