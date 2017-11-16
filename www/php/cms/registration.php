<?php include ('inc/header.php'); ?>
<body>
<?php include ('inc/logger.php'); ?>
<div id="container">
<?php include ('inc/nav.php'); ?>
<div id="body">
	<h1>Account Registration</h1>
<?php
$submit = $_POST['submit'];
if ($submit) {
$first = $_POST['first'];
$last = $_POST['last'];
$company = $_POST['company'];
$jobtitle = $_POST['jobtitle'];
$street = $_POST['street'];
$city = $_POST['city'];
$province = $_POST['province'];
$country = $_POST['country'];
$postal = $_POST['postal'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$mobile = $_POST['mobile'];
$website = $_POST['website'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$confirm = $_POST['confirm'];
include('inc/dbconnect.php');
$result = mysql_query("SELECT email FROM $dbt1 WHERE email='$email'");
$row = mysql_fetch_array($result);
$taken = $row["email"];
if ($first =="" || $last =="" || $email =="" || $passwd =="" || $confirm =="") { ?>
	<div class="error">A required field is empty!</div>
<?php } else if ($email == $taken) { ?>
	<div class="error">Email is already taken!</div>
<?php } else if ($passwd != $confirm) { ?>
	<div class="error">Passwords do not match!</div>
<?php } else if (!preg_match("/^[\ a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,6}$/i", $email)) { ?>
	<div class="error">Your email address is not valid!</div>
<?php } else {
$sql = "INSERT INTO $dbt1 (first, last, company, jobtitle, street, city, province, country, postal, phone, fax, mobile, website, email, passwd, confirm) VALUES ('$first', '$last', '$company', '$jobtitle', '$street','$city','$province','$country','$postal','$phone','$fax', '$mobile', '$website', '$email', PASSWORD('$passwd'), PASSWORD('$confirm'))";
$result = mysql_query($sql);
echo "<div class='success'>Registration successful! | <a href='login.php'>Login</a></div>"; 
}}
?>
	<form action="registration.php" method="post">
		<table cellpadding="5" cellspacing="3" width="100%">
			<tr>
				<td width="120" >First Name:</td><td><input class="req" name="first" type="text" value="" size="32" maxlength="32" /></td>
				<td width="120" >Last Name:</td><td><input class="req" name="last" type="text" value="" size="32" maxlength="32" /></td>
			</tr><tr>
				<td>Company:</td><td><input class="not" name="company" type="text" value="" size="32" maxlength="32" /></td>
				<td>Job Title:</td><td><input class="not" name="jobtitle" type="text" value="" size="32" maxlength="32" /></td>
			</tr><tr>
				<td>Street:</td><td><input class="not" name="street" type="text" value="" size="32" maxlength="32" /></td>
				<td>City:</td><td><input class="not" name="city" type="text" value="" size="32" maxlength="32" /></td>
			</tr><tr>
				<td>Province:</td><td><input class="not" name="province" type="text" value="BC" size="32" maxlength="32" /></td>
				<td>Country:</td><td><input class="not" name="country" type="text" value="Canada" size="32" maxlength="32" /></td>
			</tr><tr>
				<td>Postal:</td><td><input class="not" name="postal" type="text" value="" size="32" maxlength="32" /></td>
				<td>Fax:</td><td><input class="not" name="fax" type="text" value="" size="32" maxlength="32" /></td>
			</tr><tr>
				<td>Phone:</td><td><input class="not" name="phone" type="text" value="" size="32" maxlength="32" /></td>
				<td>Mobile:</td><td><input class="not" name="mobile" type="text" value="" size="32" maxlength="32" /></td>
			</tr><tr>
				<td>Web:</td><td><input class="not" name="website" type="text" value="" size="32" maxlength="32" /></td>
				<td>Email:</td><td><input class="req" name="email" type="text" value="" size="32" maxlength="32" /></td>
			</tr><tr>
				<td>Password:</td><td><input class="req" name="passwd" type="password" id="passwd" value="" size="32" maxlength="32" /></td>
				<td>Confirm:</td><td><input class="req" name="confirm" type="password" id="confirm" value="" size="32" maxlength="32" /></td>
			</tr><tr>
				<td><input name="submit" type="submit" value="Register" /><input name="Reset" type="reset" value="Reset" /></td>
			</tr>
		</table>
	</form>
</div>
</div>
<div id="footer"><p>&copy;2008 Justin Bull</p></div>
</body>
</html>
