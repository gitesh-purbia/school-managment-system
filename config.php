<?php
//mysql connection file
define('DB_HOST', 'localhost');
define('DB_NAME', 'school-managment-system');
define('DB_USER', 'root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die ("failed to connect to mysql:" . mysql_error());
$db= mysql_select_db(DB_NAME,($con)) or die("failed to connect with database" . mysql_error());

?>

