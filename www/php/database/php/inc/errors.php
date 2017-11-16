<?php if ($first == "") { ?>
<p>Your First Name is Empty!</p>
<?php } if ($last == "") { ?>
<p>Your Last Name is Empty!</p>
<?php } if ($email == "") { ?>
<p>Your E-mail is Empty!</p>
<?php } if ($passwd == "") { ?>
<p>Your Password is Empty!</p>
<?php } if ($confirm == "") { ?>
<p>Your Password Confirmation is Empty!</p>
<?php } if ($passwd != $confirm) { ?>
<p>Your Password and Confirmation DO NOT match!</p>
<?php } if (!preg_match("/^[\ a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,6}$/i", $email)) { ?>
<p>Your email address is not valid!</p>
<?php } else {
include('inc/dbconnect.php');
$sql = "INSERT INTO clients (first, last, city, province, country, postal, phone, email, passwd)
VALUES ('$first', '$last', '$city', '$province', '$country', '$postal', '$phone', '$email', PASSWORD('$passwd'))";
mysql_query($sql); ?>
<p><a href="index.php">Add Another Client</a></p>
<p><a href="clients.php">View All Clients</a></p>
<h2><?php echo $first; ?>, <?php echo $last; ?> was successfully added!</h2>
<p>First Name: <?php echo $first; ?></p>
<p>Last Name: <?php echo $last; ?></p>
<p>City: <?php echo $city; ?></p>
<p>Province: <?php echo $province; ?></p>
<p>Postal Code: <?php echo $postal; ?></p>
<p>Country: <?php echo $country; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Phone: <?php echo $phone; ?></p>
<p>Password: <?php echo $passwd; ?></p>
<?php } ?>
