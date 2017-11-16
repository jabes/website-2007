<?php include ('inc/header.php'); ?>
<body>
<?php include ('inc/logger.php'); ?>
<div id="container">
<?php include ('inc/nav.php'); ?>
<div id="body">
	<h1>Edit Product ID: <?php echo"$productid"; ?></h1>
<?php
$submit = $_POST['submit'];
$productid = $_GET['productid'];
include('../inc/dbconnect.php');
if ($submit) {
$productid = $_POST["productid"];
$title = $_POST["title"];
$price = $_POST["price"];
$photo = $_POST["photo"];
$description = $_POST["description"];
$category = $_POST["category"];
$dateModified = date('Y-m-d');
$sql = "UPDATE $dbt2 SET title='$title', price='$price', category='$category', dateModified='$dateModified' WHERE productid='$productid'";
$result = mysql_query($sql); ?>
<div class='success'>Update was successful!</div>
<?php }
$result = mysql_query("SELECT * FROM products WHERE productid = '$productid'");
$row = mysql_fetch_array($result);
$productid = $row["productid"];
$title = $row["title"];
$price = $row["price"];
$category = $row["category"];
$dateModified = date('Y-m-d');
?>
	<form action="edit_products.php" method="post">
		<table cellpadding="5" cellspacing="3" width="100%">
			<tr>
				<td>Product ID:<input name="productid" type="hidden" value="<?php echo"$productid"; ?>" /></td>
				<td><input name="productid" type="text" value="<?php echo"$productid"; ?>" size="18" maxlength="128" readonly="true" /></td>
			</tr>
			<tr><td>Title:</td><td width="30%"><input name="title" type="text" value="<?php echo"$title"; ?>" size="18" maxlength="128" /></td></tr>
			<tr><td>Price:</td><td><input name="price" type="text" value="<?php echo"$price"; ?>" size="18" maxlength="128" /></td></tr>
			<tr><td>Category:</td><td><input name="category" type="text" id="category" value="<?php echo"$category"; ?>" size="18" maxlength="128" /></td></tr>
			<tr><td>Date Modified:</td><td><input name="dateModified" type="text" value="<?php echo"$dateModified"; ?>" size="18" maxlength="128" readonly="true" /></td></tr>
			<tr><td>Actions</td><td><input name="submit" type="submit" value="Edit" /></td></tr>
		</table>
	</form>
</div>
</div>
<div id="footer"><p>&copy;2008 Justin Bull</p></div>
</body>
</html>