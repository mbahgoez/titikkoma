<?php 

include "../../components/connection.php";
include "../../components/functions.php";

$id = $_GET['update'];

$title = check_input($_POST['title']);
$distro = check_input($_POST['distro']);
$categories = check_input($_POST['category']);
$arsitektur = check_input($_POST['arsitektur']);
$desc = $_POST['desc'];


$sql = "UPDATE tbl_app
SET title_app = '$title',
distro_app = '$distro',
category = '$categories',
architecture = '$arsitektur',
description = '$desc' WHERE id_app = '$id'";


$query = mysqli_query($con, $sql);

if($query == true){
	header("Location:/");
}
else {
	echo "gagal";
}