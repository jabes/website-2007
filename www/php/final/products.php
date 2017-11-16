<?php include ('inc/header.php'); ?>
<body>
<?php include ('inc/logger.php'); ?>
<div id="container">
<?php include ('inc/nav.php'); ?>
<div id="body">
	<h1>Products</h1>
	<table width="100%" cellpadding="5" cellspacing="3">
		<tr>
			<td width="150">Product ID</td>
			<td width="350">Title</td>
			<td width="150">Price</td>
			<td width="350">Photo</td>
			<td width="350">Category </td>
		</tr>
<?php
include('inc/dbconnect.php');
$result = mysql_query("SELECT * FROM $dbt2 ORDER BY productid");
while ($row = mysql_fetch_array($result)) {
$productid = $row["productid"];
$title = $row["title"];
$price = $row["price"];
$photo = $row["photo"];
$category = $row["category"];
?>
		<tr>
			<td><?php echo $productid; ?></td>
			<td><?php echo $title; ?></td>
			<td><?php echo $price; ?></td>
			<td><img src="pics/<?php echo $photo; ?>" alt="<?php echo $title; ?>"></td>
			<td><?php echo $category; ?></td>
		</tr>
<?php } ?>
	</table>
</div>
</div>
<div id="footer"><p>&copy;2008 Justin Bull</p></div>
</body>
</html>
