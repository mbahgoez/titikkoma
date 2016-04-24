<?php 

include "connection.php";

if(isset($_POST['tambah'])){
	
	$title = $_POST['title'];
	$distro = $_POST['distro'];
	$arsitektur = $_POST['arsitektur'];
	$description = $_POST['desc'];

	// $sql = "INSERT INTO tbl_app(title_app, distro_app, architecture, description) VALUES('$title', '$distro', '$arsitektur', '$description')";
	$sql = "INSERT INTO tbl_app(title_app, distro_app, architecture, description) VALUES('$title', '$distro', '$arsitektur', '$description')";
	
	

		if(mysqli_query($con, $sql)){
			header("Location:../admin/");
		}
		else {
			echo "error";
			echo mysqli_connect_error();	
		}
	}

 ?>		
