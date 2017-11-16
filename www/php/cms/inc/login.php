<?php
include('dbconnect.php');
$email = $_POST['email']; 
$passwd = $_POST['passwd'];
$sql="SELECT * FROM $dbt1 WHERE email='$email' AND passwd=PASSWORD('$passwd')";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$clientid = $row["clientid"];
$user = $row["first"];
$privileges = $row["privileges"];
$num_rows=mysql_num_rows($result);
if($num_rows==1) {
	if ($privileges != "Admin") {
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['passwd'] = $passwd;
		$_SESSION['user'] = $user;
		$_SESSION['clientid'] = $clientid;
		header("location:../index.php");
	} else {
		session_start();
		$_SESSION['admin_email'] = $email;
		$_SESSION['admin_passwd'] = $passwd;
		$_SESSION['user'] = $user;
		$_SESSION['admin_privileges'] = $privileges;
		header("location:../admin/clients.php");
	}
} else { header("location:../login.php?invalid=true"); }
?>
