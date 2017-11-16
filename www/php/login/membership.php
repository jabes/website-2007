<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Membership</title>
</head>
<body>
<div id="background"></div>
<div id="container">
<?php if ($_GET['field'] == "empty") { echo "<div class='error'><p>A field is empty</p></div>"; } ?>
<?php if ($_GET['field'] == "false") { echo "<div class='error'><p>Email or password does not match</p></div>"; } ?>
<?php if ($_GET['field'] == "invalid") { echo "<div class='error'><p>Email is invalid</p></div>"; } ?>
<?php if ($_GET['field'] == "taken") { echo "<div class='error'><p>Username or email is already in use</p></div>"; } ?>
<form action="inc/create.php" method="post" name="login">	
	<p>User Name</p><input type="text" name="username" />
	<div>
		<div class="left"><p>Email</p><input type="text" name="email" /></div>
		<div class="right"><p>Confirm</p><input type="text" name="emailconfirm" /></div>
	</div>
	<div class="clear"></div>
	<div>
		<div class="left"><p>Password</p><input type="text" name="password" /></div>
		<div class="right"><p>Confirm</p><input type="text" name="passconfirm" /></div>
	</div>
	<div class="clear">
		<div class="space"></div>
		<input type="submit" name="submit" value="Join" />
	</div>
</form>
</div>
</body>
</html>
