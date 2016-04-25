<?php 

include "../../components/connection.php";

$id = $_GET['update'];

$title = $_POST['title'];
$distro = $_POST['distro'];
$categories = $_POST['category'];
$arsitektur = $_POST['arsitektur'];
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