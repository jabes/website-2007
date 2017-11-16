<?php include ('inc/header.php'); ?>
<body>
<?php include ('inc/logger.php'); ?>
<div id="container">
<?php include ('inc/nav.php'); ?>
<div id="body">
	<h1>Client List</h1>
	<table width="100%" cellpadding="5" cellspacing="3">
		<tr>
			<td width="150">Client ID</td>
			<td width="350">First Name</td>
			<td width="150">Last Name</td>
			<td width="350">Email</td>
			<td width="350">Privileges</td>
			<td width="350">Actions</td>
		</tr>
<?php include('../inc/dbconnect.php'); ?>
<?php $delete = $_GET['delete']; if ($delete) { mysql_query("DELETE FROM $dbt1 WHERE clientid='$delete'"); }?>
<?php $result = mysql_query("SELECT * FROM $dbt1");
while ($row = mysql_fetch_array($result)) {
$clientid = $row["clientid"];
$first = $row["first"];
$last = $row["last"];
$email = $row["email"];
$privileges = $row["privileges"];
if ($alternate1 == "1" ) { $color = "#EEEEEE"; $alternate1 = "2"; } 
else { $color = "#DDDDDD"; $alternate1 = "1"; }
?>
		<tr bgcolor="<?php echo"$color"; ?>">
			<td><?php echo $clientid; ?></td>
			<td><?php echo $first; ?></td>
			<td><?php echo $last; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $privileges; ?></td>
			<td><a href="edit_clients.php?clientid=<?php echo $clientid; ?>">Edit</a> | <a href="<?php echo "$_SERVER[PHP_SELF]?delete=$clientid"; ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
		</tr>
<?php } ?>
	</table>
</div>
</div>
<div id="footer"><p>&copy;2008 Justin Bull</p></div>
</body>
</html>