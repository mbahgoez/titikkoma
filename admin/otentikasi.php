<?php 

session_start();
include "../components/connection.php";
include "../components/functions.php";

if(isset($_SESSION['id'])){
	header("Location:/admin/");
}


if(isset($_POST['username']) && isset($_POST['password'])){


	$username = check_input($_POST['username']);
	$password = check_input($_POST['password']);

	$sql = "SELECT * FROM user WHERE user='$username' AND pass='$password'";

	$query = mysqli_query($con, $sql);

	$num = mysqli_num_rows($query);

	if($num == 1){

		$data = mysqli_fetch_array($query);
		
		$_SESSION['id'] = $data[0];
		$_SESSION['user'] = $data[1];

		if(isset($_SESSION['id'])){
			header("Location:/admin");
		}
	}
	else {
		header("Location:/admin/login");
	}

}
else {
	header("Location:/admin/login");
}

 ?>
	