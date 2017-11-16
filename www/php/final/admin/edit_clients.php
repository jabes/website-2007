<?php include ('inc/header.php'); ?>
<body>
<?php include ('inc/logger.php'); ?>
<div id="container">
<?php include ('inc/nav.php'); ?>
<div id="body">
	<h1>Edit Client ID: <?php echo"$clientid"; ?></h1>
<?php
include('../inc/dbconnect.php');
$submit = $_POST['submit'];
if ($submit) {
$clientid = $_POST['clientid'];
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
$privileges = $_POST['privileges'];
$result = mysql_query("SELECT email FROM $dbt1 WHERE email='$email'");
$num_rows=mysql_num_rows($result);
$taken = $row["email"];
if ($email == $taken) { ?>
	<div class='error'>Email is already taken!</div>
<?php } else if ($passwd != $confirm) { ?>
	<div class='error'>Passwords do not match!</div>
<?php } else if (!preg_match("/^[\ a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,6}$/i", $email)) { ?>
	<div class='error'>Your email address is not valid!</div>
<?php } else {

$sql = "UPDATE $dbt1 SET first='$first', last='$last', company='$company', jobtitle='$jobtitle', street='$street', city='$city', province='$province', country='$country', postal='$postal', phone='$phone', fax='$fax', mobile='$mobile', website='$website', email='$email', passwd=PASSWORD('$passwd'), confirm=PASSWORD('$confirm'), privileges='$privileges' WHERE clientid='$clientid'";
$result = mysql_query($sql); ?>
	<div class='success'>Update was successful!</div>
<?php }}
$result = mysql_query("SELECT * FROM $dbt1 WHERE clientid = '$clientid'");
$row = mysql_fetch_array($result);
$clientid = $row["clientid"];
$first = $row["first"];
$last = $row["last"];
$company = $row["company"];
$jobtitle = $row["jobtitle"];
$street = $row["street"];
$city = $row["city"];
$province = $row["province"];
$country = $row["country"];
$postal = $row["postal"];
$phone = $row["phone"];
$mobile = $row["mobile"];
$fax = $row["fax"];
$website = $row["website"];
$email = $row["email"];
$passwd = $row["passwd"];
$confirm = $row["confirm"];
$privileges = $row["privileges"];
?>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input name="clientid" type="hidden" value="<?php echo $clientid; ?>" />
		<table cellpadding="5" cellspacing="3" width="100%">
			<tr>
				<td width="120">First Name:</td><td><input class="req" name="first" type="text" value="<?php echo $first; ?>" size="32" maxlength="32" /></td>
				<td width="120">Last Name:</td><td><input class="req" name="last" type="text" value="<?php echo $last; ?>" size="32" maxlength="32" /></td>
			</tr>
			<tr>
				<td>Company:</td><td><input class="not" name="company" type="text" value="<?php echo $company; ?>" size="32" maxlength="32" /></td>
				<td>Job Title:</td><td><input class="not" name="jobtitle" type="text" value="<?php echo $jobtitle; ?>" size="32" maxlength="32" /></td>
			</tr>
			<tr>
				<td>Street:</td><td><input class="not" name="street" type="text" value="<?php echo $street; ?>" size="32" maxlength="32" /></td>
				<td>City:</td><td><input class="not" name="city" type="text" value="<?php echo $city; ?>" size="32" maxlength="32" /></td>
			</tr>
			<tr>
				<td>Province:</td><td><input class="not" name="province" type="text" value="<?php echo $province; ?>" size="32" maxlength="32" /></td>
				<td>Country:</td><td><input class="not" name="country" type="text" value="<?php echo $country; ?>" size="32" maxlength="32" /></td>
			</tr>
			<tr>
				<td>Postal:</td><td><input class="not" name="postal" type="text" value="<?php echo $postal; ?>" size="32" maxlength="32" /></td>
				<td>Phone:</td><td><input class="not" name="phone" type="text" value="<?php echo $phone; ?>" size="32" maxlength="32" /></td>
			</tr>
			<tr>
				<td>Mobile:</td><td><input class="not" name="mobile" type="text" value="<?php echo $mobile; ?>" size="32" maxlength="32" /></td>
				<td>Fax:</td><td><input class="not" name="fax" type="text" value="<?php echo $fax; ?>" size="32" maxlength="32" /></td>
			</tr>
			<tr>
				<td>Web:</td><td><input class="not" name="website" type="text" value="<?php echo $website; ?>" size="32" maxlength="32" /></td>
				<td>Email:</td><td><input class="req" name="email" type="text" value="<?php echo $email; ?>" size="32" maxlength="32" /></td>
			</tr>
			<tr>
				<td>Password:</td><td><input class="req" name="passwd" type="password" value="<?php echo $passwd; ?>" size="32" maxlength="32" /></td>
				<td>Confirm:</td><td><input class="req" name="confirm" type="password" value="<?php echo $confirm; ?>" size="32" maxlength="32" /></td>
			</tr>
			<tr><td><input name="Reset" type="reset" value="Reset" /><input name="submit" type="submit" value="Update" /></td></tr>
		</table>
	</form>
</div>
</div>
<div id="footer"><p>&copy;2008 Justin Bull</p></div>
</body>
</html>