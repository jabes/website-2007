<?php
$hostname = "127.0.0.1";
$user = "root";
$pass = "root";
$database = "cms";
$dbt1 = "clients";
$dbt2 = "products";
mysql_connect("$hostname", "$user", "$pass")or die("Unable to connect to MySQL database");
mysql_select_db("$database")or die("Could not select MySQL database");
?>