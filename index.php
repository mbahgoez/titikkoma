<?php 
include "components/connection.php";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width">
	<meta charset="UTF-8">
	<title>GetApete</title>
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<?php 
	include "components/header.php";
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
					<?php include "components/menu.php"; ?>
				</div>
				<div class="col lg-6">
					<?php 
					if(isset($_GET['find'])){
						$q = $_GET['find'];

						include "components/search-results.php";
					}
					else {
						include "components/content-list.php";
					}
					 ?>
				</div>
				<div class="col lg-3">
					<?php include "components/ads.php" ?>
				</div>
			</div>
		</div>
		
	</section>


	<link rel="stylesheet" href="css/nprogress.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/nprogress.js"></script>

	<script>
			NProgress.configure({showSpinner: true});
			NProgress.start();
	</script>

	<script src="js/script.js"></script>
</body>
</html>