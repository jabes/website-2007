<?php
$email = $_POST['email']; 
$password = $_POST['password'];
include('connect.php');
$sql = "SELECT * FROM main WHERE email='$email' AND password='$password'";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
if($num_rows == 1) {
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
	header("location:../client.php");
} else { 
	header("location:../index.php?login=failed");
}
?>
