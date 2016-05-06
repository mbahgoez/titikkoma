<?php

session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['user'])){
	header("Location:login.php");
}

include "../components/connection.php";
include "../components/functions.php";

$id = $_GET['edit'];
$sql = "SELECT * FROM tbl_app WHERE id_app = '$id'";


$query = mysqli_query($con, $sql);

$data = mysqli_fetch_array($query);
$distro = $data['distro_app'];
$categories = $data['category'];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
	<link rel="stylesheet" href="../css/nprogress.css">
	<link rel="stylesheet" href="../css/ionicons.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php 
	include "../components/header.php";
	 ?>
	<section class="container" id="content">
		<div class="row">
			<div class="col lg-3">
				<?php include "../components/menu.php" ?>
			</div>
			<div class="col lg-7">
				

				<div class="make-post">
					<div class="card">
						<h6>Edit Post</h6>
						<form autocomplete="off" method="POST" action="../admin/process/update.php?update=<?php echo $id; ?>">
							<input 
								type="text" 
								placeholder="Name" 
								name="title" 
								value="<?php echo $data['title_app']; ?>" required>
							
							<input 
								type="text" 
								placeholder="Slug" 
								name="slug"
								value="<?php echo $data['slug_app']; ?>" 
								required>

							<!-- <label for="">Untuk membuat keywords, buatlah masing-masing kata yang di pisah menggunakan tanda ','</label> -->

							<input 
								type="text" 
								placeholder="Keywords" 
								name="keywords"
								value="<?php echo $data['keywords']; ?>"
								>

							<input 
								type="text" 
								placeholder="Description for SEO" 
								name="metadesc"
								value="<?php echo $data['metadesc']; ?>"
								>

							<select name="distro" id="distro">
								<option <?php 
								echo setSelected($distro, '');
								 ?> value="">Select Distro supported</option>
								<option <?php 
								echo setSelected($distro, 'All');
								 ?> value="All">All Linux</option>
								<option <?php 
								echo setSelected($distro, 'apt-get');
								 ?> value="apt-get">apt-get</option>
								<option <?php 
								echo setSelected($distro, 'pacman');
								 ?> value="pacman">pacman</option>
								<option <?php 
								echo setSelected($distro, 'rpm');
								 ?> value="rpm">rpm</option>
								<option <?php 
								echo setSelected($distro, 'yum');
								 ?> value="yum">yum</option>
								<option <?php 
								echo setSelected($distro, 'ubuntu');
								 ?> value="ubuntu">Ubuntu</option>
								<option <?php 
								echo setSelected($distro, 'mint');
								 ?> value="mint">Linux Mint</option>
								<option <?php 
								echo setSelected($distro, 'arch');
								 ?> value="arch">Arch Linux</option>
								<option <?php 
								echo setSelected($distro, 'debian');
								 ?> value="debian">Debian</option>

							</select>



							<select name="category" id="categories">
								<option <?php echo setSelected($categories, ''); ?> value="">Select Category</option>
								<option <?php echo setSelected($categories, 'all Aplication'); ?> value="all Aplication">All Application</option>
								<option <?php echo setSelected($categories, 'programming'); ?> value="programming">Programming</option>
								<option <?php echo setSelected($categories, 'office'); ?> value="office">Office</option>
								<option <?php echo setSelected($categories, 'multimedia'); ?> value="multimedia">Multimedia</option>
								<option <?php echo setSelected($categories, 'internet'); ?> value="internet">Internet</option>
								<option <?php echo setSelected($categories, 'utillity'); ?> value="utillity">Utillity</option>
							</select>

							



							<div class="group-form">
								<label>
									<input name="arsitektur" value="32" type="checkbox" <?php setChecked($data['architecture'], 32); ?>>
									<span>32 bit</span>
								</label>
								<label>
									<input name="arsitektur" value="64" type="checkbox" <?php setChecked($data['architecture'], 64); ?>>
									<span>64 bit</span>
								</label>
								<label>
									<input name="arsitektur" value="3264" type="checkbox" <?php setChecked($data['architecture'], 3264); ?>>
									<span>64 bit & 32 bit</span>
								</label>
							</div>

							<textarea name="desc" id="edit-textarea" cols="50" rows="20"><?php echo $data['description']; ?></textarea>



							<div id="preview">
								<div class="header">
									<span>Preview</span>
								</div>
								<div class="code">
									
								</div>
							</div>
							
							<button type="submit" name="tambah" value="submit" id="tambah">PUBLISH AND UPDATE</button>
							<button type="reset" name="reset" value="reset" id="reset">RESET</button>
						</form>
					</div>
				</div>

			</div> <!-- col -->
		</div> <!-- row -->
	</section>
	




	<script src="../js/jquery.min.js"></script>
	<script src="../js/nprogress.js"></script>
	<script src="tinymce/tinymce.min.js"></script>
	<script src="../js/script.js"></script>
	
	<script>
		
		tinymce.init({
			menubar:false,
			selector:'textarea#edit-textarea',
			toolbar:'undo redo | bold italic | link code',
			plugins:'code preview',
			theme:'modern'
		});
	</script>

</body>
</html>