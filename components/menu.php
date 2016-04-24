<?php 
session_start();

if(isset($_GET['category'])){
	$category = $_GET["category"];
}
else {
	$category = "all";
}


function setActiveClass($cat, $str){
	if($cat == $str){
		echo "class='active'";
	}
}
 ?>

<div id="menu">

	<div class="category">
		
		<?php 
		if(isset($_SESSION['id']) && isset($_SESSION['user'])){

		?>
		

		<ul class="admin">
			<li><a href="/admin">You Logged as <?php echo $_SESSION['user']; ?></a></li>
			<li><a class="keluar" href="/admin/keluar.php">Keluar</a></li>
		</ul>
	
		<?php
		}
		 ?>

		<ul class="list">
			<li>
				<a href="?category=all" <?php setActiveClass($category, "all") ?>>All Application</a>
			</li>
			<li>
				<a href="?category=programming" <?php setActiveClass($category, "programming") ?> >Programming</a>
			</li>
			<li>
				<a href="?category=office" <?php setActiveClass($category, "office") ?>>Office</a>
			</li>
			<li>
				<a href="?category=multimedia" <?php setActiveClass($category, "multimedia") ?>>Multimedia</a>
			</li>
			<li>
				<a href="?category=internet" <?php setActiveClass($category, "internet") ?>>Internet</a>
			</li>
			<li>
				<a href="?category=utility" <?php setActiveClass($category, "utility") ?>>Utility</a>
			</li>
		</ul>
	</div>
</div>