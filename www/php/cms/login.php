<?php include ('inc/header.php'); ?>
<body>
<?php include ('inc/logger.php'); ?>
<div id="container">
<?php include ('inc/nav.php'); ?>
<div id="body">
	<h1>Login</h1>
<?php $invalid = $_GET['invalid']; if ($invalid=="true"){ ?>
	<div class='error'>Sorry, your USER ID or PASSWORD is not in our database! Please try again.</div>
<?php } ?>
	<form id="login" name="login" method="post" action="inc/login.php">
		<table cellpadding="5" cellspacing="3" width="100%">
			<tr><td width="120">Email:</td><td><input class="req" name="email" type="text" size="32" maxlength="32" /></td></tr>
			<tr><td width="120">Password:</td><td><input class="req" name="passwd" type="password" size="32" maxlength="32" /></td></tr>
			<tr><td width="120"><input name="submit" type="submit" id="submit" value="Submit" /></td></tr>
		</table>
	</form>
</div>
</div>
<div id="footer"><p>&copy;2008 Justin Bull</p></div>
</body>
</html>
