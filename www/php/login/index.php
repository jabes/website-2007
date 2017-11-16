<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login Form</title>
</head>
<body>
<div id="background"></div>
<div id="container">
<?php if ($_GET['login'] == "failed") { echo "<div class='error'><p>Incorrect email / password combination</p></div>"; } ?>
<?php if ($_GET['create'] == "success") { echo "<div class='error'><p>",$_GET['id']," was successfuly added</p></div>"; } ?>
<form action="inc/login.php" method="post" name="login">	
	<div class="left"><p>Email</p><input type="text" name="email" /></div>
	<div class="right"><p>Password</p><input type="text" name="password" /></div>
	<div class="clear">
		<div class="space"></div>
		<input type="submit" name="submit" value="Login" />
		<p><a href="membership.php" name="Become a member">Become a member</a></p>
	</div>
</form>
</div>
</body>
</html>
