<?php 

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


function getUrlHost($link){
	echo 'http://'.$_SERVER['SERVER_NAME'].$link;
}
 ?>




<div id="menu">

	<div id="category" class="category">
		<?php 
		if(isset($_SESSION['id']) && isset($_SESSION['user'])){

		?>
		

		<ul class="admin">
			<li><a href="/admin">You Logged as <?php echo $_SESSION['user']; ?></a></li>
			<li><a class="keluar" href="/admin/keluar">Keluar</a></li>
		</ul>
	
		<?php
		}
		 ?>

		<ul class="list">
			<li>
				<a href="<?php getUrlHost("/category/all") ?>" <?php setActiveClass($category, "all") ?>>All Application</a>
			</li>
			<li>
				<a href="<?php getUrlHost('/category/programming') ?>" <?php setActiveClass($category, "programming") ?> >Programming</a>
			</li>
			<li>
				<a href="<?php getUrlHost('/category/office'); ?>" <?php setActiveClass($category, "office") ?>>Office</a>
			</li>
			<li>
				<a href="<?php getUrlHost('/category/multimedia'); ?>" <?php setActiveClass($category, "multimedia") ?>>Multimedia</a>
			</li>
			<li>
				<a href="<?php getUrlHost('/category/internet'); ?>" <?php setActiveClass($category, "internet") ?>>Internet</a>
			</li>
			<li>
				<a href="<?php getUrlHost('/category/utility'); ?>" <?php setActiveClass($category, "utility") ?>>Utility</a>
			</li>
		</ul>
	</div>
</div>


