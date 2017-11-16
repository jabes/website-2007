<?php include('connect.php');

$username = $_POST['username'];
$email = $_POST['email'];
$emailconfirm = $_POST['emailconfirm'];
$password = $_POST['password'];
$passconfirm = $_POST['passconfirm'];

if ($username == "") { $error = true; $empty = true; }
if ($email == "") { $error = true; $empty = true; }
if ($emailconfirm == "") { $error = true; $empty = true; }
if ($password == "") { $error = true; $empty = true; }
if ($passconfirm == "") { $error = true; $empty = true; }
if ($email != $emailconfirm) { $error = true; $confirm = true; }
if ($password != $passconfirm) { $error = true; $confirm = true; }
if (!preg_match("/^[\ a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,6}$/i", $email)) { $error = true; $invalid = true; }
if ( mysql_num_rows(mysql_query("SELECT * FROM main WHERE username='$username'")) != 0) { $error = true; $taken = true; }
if ( mysql_num_rows(mysql_query("SELECT * FROM main WHERE email='$email'")) != 0) { $error = true; $taken = true; }

if ($empty == true) { header("location:../membership.php?field=empty"); }
if ($empty != true && $confirm == true) { header("location:../membership.php?field=false"); }
if ($empty != true && $invalid == true) { header("location:../membership.php?field=invalid"); }
if ($empty != true && $taken == true) { header("location:../membership.php?field=taken"); }
if ($error != true) { mysql_query("INSERT INTO main (username, email, password) VALUES ('$username', '$email', '$password')"); header("location:../index.php?create=success&id=$username"); }

?>