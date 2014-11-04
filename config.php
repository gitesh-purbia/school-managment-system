<?php
//mysql connection file
define('DB_HOST', 'localhost');
define('DB_NAME', 'school-managment-system');
define('DB_USER', 'root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die ("failed to connect to mysql:" . mysql_error());
$db=mysqli_select_db($con,DB_NAME) or die("failed to connect with database" . mysql_error());
<<<<<<< HEAD
=======

>>>>>>> ec91d3b1b899ae0c51357be71bc250148a5d6959
?>

