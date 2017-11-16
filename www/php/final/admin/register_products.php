<?php include ('inc/header.php'); ?>
<body>
<?php include ('inc/logger.php'); ?>
<div id="container">
<?php include ('inc/nav.php'); ?>
<div id="body">
	<h1>Registered Product</h1>
<?php include ('inc/upload.php'); ?>
<?php 
$title = $_POST['title'];
$price = "$".$_POST['price'];
$category = $_POST['category'];
$dateAdded = date('Y-m-d');
$dateModified = date('Y-m-d');
include('../inc/dbconnect.php');
$sql = "INSERT INTO $dbt2 (title, price, photo, category, dateAdded, dateModified) VALUES ('$title', '$price', '$imgname', '$category', '$dateAdded', '$dateModified')";
$result = mysql_query($sql);
?>
	<form action="register_products.php" method="post">
		<table cellpadding="5" cellspacing="3" width="100%">
			<tr><td>Photo:</td><td width="30%"><img src="../pics/<?php echo $imgname; ?>" alt="<?php echo $title; ?>"></td></tr>
			<tr><td>Title:</td><td width="30%"><?php echo $title; ?></td></tr>
			<tr><td>Price:</td><td><?php echo $price; ?></td></tr>
			<tr><td>Category:</td><td><?php echo $category; ?></td></tr>
			<tr><td>Date Added:</td><td><?php echo $dateAdded; ?></td></tr>
		</table>
	</form>
</div>
</div>
<div id="footer"><p>&copy;2008 Justin Bull</p></div>
</body>
</html>