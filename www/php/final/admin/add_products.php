<?php include ('inc/header.php'); ?>
<body>
<?php include ('inc/logger.php'); ?>
<div id="container">
<?php include ('inc/nav.php'); ?>
<div id="body">
	<h1>Add Product</h1>
<?php include ('inc/upload.php'); ?>
	<form action="register_products.php" method="post" enctype="multipart/form-data">
		<table cellpadding="5" cellspacing="3" width="100%">
			<tr><td>Title:</td><td><input name="title" type="text" size="18" maxlength="128" /></td></tr>
			<tr><td>Price:</td><td><input name="price" type="text" size="18" maxlength="128" /></td></tr>
			<tr><td>Photo:</td><td><input type="file" name="image" size="32"></td></tr>
			<tr><td>Category:</td><td><input name="category" type="text" id="category" size="18" maxlength="128" /></td></tr>
			<tr><td>Actions</td><td><input name="submit" type="submit" value="Add" /></td></tr>
		</table>
	</form>
</div>
</div>
<div id="footer"><p>&copy;2008 Justin Bull</p></div>
</body>
</html>