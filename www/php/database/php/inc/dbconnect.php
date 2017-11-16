<?php
$hostname = "192.168.2.7";
$user = "jbullca";
$pass = "jb.789521";
$database = "jbullca_jbulldb"; 
mysql_connect("$hostname", "$user", "$pass")or die("Unable to connect to MySQL database");
mysql_select_db("$database")or die("Could not select MySQL database");
?>