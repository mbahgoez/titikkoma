<?php 
$server = "localhost";
$user = "root";
$pass = "MYSECRET";
$db = "alldeb";

$con = mysqli_connect($server, $user, $pass, $db);

if(!$con){
	echo mysqli_connect_errno(). PHP_EOL;
	echo mysqli_connect_error();
}


$count = mysqli_query($con, "SELECT COUNT(id_app) FROM tbl_app");

$count = mysqli_fetch_array($count);
$count = $count[0];

 ?>