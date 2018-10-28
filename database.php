<?php
$dbuser="root";//database username
$dbpassword=""; //database password
$host="localhost";//APP_URL
$dbase="signup";//database name

$conn = mysqli_connect($host,$dbuser,$dbpassword,$dbase) or die("Error connecting to database");

?>