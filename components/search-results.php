<?php 
include "connection.php";

if(isset($_GET['find'])){
	$search = $_GET['find'];

	$sql = "SELECT * FROM tbl_app WHERE title_app LIKE '%$search%' ORDER BY id_app DESC";
	$query = mysqli_query($con, $sql);

	if(mysqli_num_rows($query) >= 1){

	

	while($app = mysqli_fetch_array($query)){ ?>

	<div class="content">
		<div class="desc-app">

			<h2><?php echo $app['title_app']; ?></h2>
			<p>Supported <b><?php echo $app['distro_app']; ?></b> 
			
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

			 ?>
			 </p>

		</div>
		
		<div class="install">

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
	<?php 	} ?>

			<?php if(isset($_SESSION['id']) && isset($_SESSION['id'])){ ?>
			<div class="action">
				<a href="/admin/edit.php?<?php echo 'edit='.$app['id_app']; ?>" class="edit">Edit</a>
				<a href="/admin/delete.php?<?php echo 'delete='.$app['id_app']; ?>" class="delete">Delete</a>
			</div>
			<?php } ?>

		</div>
	</div>

	<?php }

		}
		else {
			?>

			<div id="not-found">
				<h6>Maaf <?php echo "\"".$search."\"" ?> tidak ditemukan atau memang belum tersedia</h6>
				<i class="icon ion-flag"></i>
			</div>

			<?php
		}
	}
?>