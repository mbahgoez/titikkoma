<?php 
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['user'])){
	header("Location:login.php");
}
include "../components/connection.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width">
	<meta charset="UTF-8">
	<title>GetApete</title>
	<link rel="stylesheet" href="../css/ionicons.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	
	<?php
		include "../components/header.php"
	 ?>
	
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col lg-12">
					<h5 class="text-center">Available App (<?php echo $count; ?>)</h5>
				</div>
			</div>
			<div class="row">
				<div class="col lg-3">
					<?php
					include "../components/menu.php"; 
					 ?>
				</div>
				<div class="col lg-5" id="listview">
					<?php 
					if(isset($_GET['find'])){
						$q = $_GET['find'];

						include "../components/search-results.php";
					}
					else {
						include "../components/content-list.php";
					}
					 ?>
				</div>

				<div class="col lg-4">
					<?php include "../components/form-post.php"; ?>
				</div>
			</div><!-- row -->
		</div>
	</section>



	<link rel="stylesheet" href="../css/nprogress.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/nprogress.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>