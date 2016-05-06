
<?php 

session_start();

include "components/connection.php";
include "components/functions.php";

function linking($link){
	echo 'http://'.$_SERVER['SERVER_NAME'].'/'.$link;
}

// echo $_GET['category'];
// echo $_GET['distro'];
// echo $_GET['slug'];
// echo $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width">
	<meta charset="UTF-8">
	<?php include "components/meta-seo.php"; ?>
	<title>TitikKoma.xyz | Sebuah Program diakhiri dengan TitikKoma</title>
	<link rel="stylesheet" href="<?php linking('css/ionicons.min.css'); ?>">
	<link rel="stylesheet" href="<?php linking('css/style.css'); ?>">
	<?php include "components/analytics.php"; ?>
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

				<?php if(isset($_GET['category']) && isset($_GET['distro']) && isset($_GET['slug']) && isset($_GET['id'])){	
						if(empty($_GET['category']) || empty($_GET['distro']) || empty($_GET['slug']) || empty($_GET['id'])){
							echo "not found";

						}
						else {
							$category = $_GET['category'];
							$distro = $_GET['distro'];
							$slug = $_GET['slug'];
							$id = $_GET['id'];

							$sql = "SELECT * FROM tbl_app
							WHERE category='$category' 
							AND distro_app='$distro' 
							AND slug_app='$slug'
							AND id_app='$id'";

							$query = mysqli_query($con, $sql);

							}
				 	  } 
				 	  else if(isset($_GET['distro']) && isset($_GET['category'])){
				 	  	if(empty($_GET['distro']) || empty($_GET['category'])){
				 	  		echo "not found";
				 	  	}
				 	  	else {
				 	  		$distro = $_GET['distro'];
				 	  		$category = $_GET['category'];

				 	  		
				 	  		$sql = "SELECT * FROM tbl_app 
				 	  		WHERE distro_app='$distro'
				 	  		AND category='$category'";

				 	  		$query = mysqli_query($con, $sql);
				 	  	}
				 	  }
				 	  else if(isset($_GET['distro'])){
				 	  	if(empty($_GET['distro'])){
				 	  		echo "not found";
				 	  	}
				 	  	else {

				 	  		$distro = $_GET['distro'];

				 	  		$sql = "SELECT * FROM tbl_app 
				 	  		WHERE distro_app='$distro'";

				 	  		$query = mysqli_query($con, $sql);
				 	  		
				 	  	}
				 	  }
				 	  else if(isset($_GET['category'])){
				 	  	if(empty($_GET['category'])){
				 	  		echo "not found";
			 	  		}
			 	  		else {
			 	  			$category = $_GET['category'];

			 	  			header("Location:http://".$_SERVER['SERVER_NAME']."/category/".$category);
			 	  		}
				 	  }
				 ?> 

				 <?php 
				 	$num = mysqli_num_rows($query);
				 	if($num >= 1){
						 while($app = mysqli_fetch_array($query)){
				?>

							<div class="content">
								<div class="desc-app <?php if($num == 1){echo 'bg-color';} ?>">

									<h2>
										<?php 
											echo $app['title_app']; 
										?>
									</h2>
									<p>Supported 
										<b>
										<?php echo $app['distro_app']; ?>
										</b> 
			
									<?php 

										if($app['architecture'] == 32){
											echo "32 Bit";
										}
										else if($app['architecture'] == 64){
											echo "64 Bit";
										}
										else if($app['architecture'] == 3264){
											echo "64 Bit & 32 Bit";
										}
										else {
											echo "Tidak diketahui arsitekturnya";
										}

										echo " <b>".setCategory($app['category'])."</b>";
										 ?>
			 						</p>
								</div>
		
								<div class="install" <?php if($num == 1){echo 'style="display:block"';} ?>>

									<?php if(!empty($app['description'])){ ?>
									<div class="terminal">
										<?php
										echo $app['description']; 
										 ?>
									</div>

									<?php } else { ?>
									<div class="not-found">
										<h6>Install <?php echo $app['title_app']; ?> Belum Tersedia &nbsp;<i class="icon ion-flag"></i></h6>
									</div>
							<?php 	}?>


								<?php if(isset($_SESSION['id']) && isset($_SESSION['user'])){ ?>
									<div class="action">
										<a href="/admin/edit.php?<?php echo 'edit='.$app['id_app']; ?>" class="edit">Edit</a>
										<a href="/admin/delete.php?<?php echo 'delete='.$app['id_app']; ?>" class="delete">Delete</a>
									</div>
								<?php } ?>

								</div>
							</div>

				<?php
						}
					 }
					 else {
				?>
					 	<div id="not-found">
							<h6>Maaf tidak ditemukan atau memang belum tersedia</h6>
							<i class="icon ion-flag"></i>
						</div>
				<?php
					 } 
				 ?>


				</div>


				<div class="col lg-3">
					<?php include "components/ads.php" ?>
				</div>

			</div><!-- row -->
		</div><!-- container -->
		
	</section>


	<link rel="stylesheet" href="<?php linking('css/nprogress.css'); ?>">
	<script src="<?php linking('js/jquery.min.js'); ?>"></script>
	<script src="<?php linking('js/nprogress.js'); ?>"></script>

	<script>
			NProgress.configure({showSpinner: true});
			NProgress.start();
	</script>

	<script src="<?php linking('js/script.js'); ?>"></script>
</body>
</html>