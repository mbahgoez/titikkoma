<?php 

session_start();

if(isset($_SESSION['id'])){
	header("Location:index.php");
}

include "../components/connection.php";

if(isset($_GET['username']) && isset($_GET['password'])){

	$username = $_GET['username'];
	$password = $_GET['password'];

	$sql = "SELECT * FROM user WHERE user='$username' AND pass='$password'";

	$query = mysqli_query($con, $sql);

	$num = mysqli_num_rows($query);

	if($num == 1){
		// $sql = "SELECT id FROM user WHERE user='$username'";
		// $query = mysqli_query($con, $sql);

		// echo 

		$data = mysqli_fetch_array($query);
		
		$_SESSION['id'] = $data[0];
		$_SESSION['user'] = $data[1];

		if(isset($_SESSION['id'])){
			header("Location:index.php");
		}
	}
	else {
		header("Location:login.php");
	}

}
else {
	header("Location:login.php");
}

 ?>
	