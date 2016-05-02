<?php 
	$file = $_SERVER['SCRIPT_NAME']; 
	if($file == "/index.php"){
		// config seo

		$description = "A Simple Site to show you easy way install app in Linux";
		$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		$title 		 = "TitikKoma: Sebuah Program diakhiri dengan TitikKoma";
		$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository";
	}

	else if($file == "/category.php") {
		if($_GET['category'] == 'all'){
			$description = "Category berbagai aplikasi tersedia disini mulai dari pemrograman, office,multimedia dan grapich";
			$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			$title 		 = "TitikKoma: All Application";
			$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository";
		}
		else if($_GET['category'] == 'programming'){
			$description = "TitikKoma: Programming";
			$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			$title 		 = "TitikKoma: Programming";
			$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository, programming, texteditor, debug, compiler, node";
		}
		else if($_GET['category'] == 'office'){
			$description = "TitikKoma: Office";
			$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			$title 		 = "TitikKoma: Office";
			$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository, microsoft office, open office, wps, microsoft word, libre office, word processing, excel, doc, docx, ppt";
		}
		else if($_GET['category'] == 'multimedia'){
			$description = "TititkKoma: Multimedia";
			$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			$title 		 = "TitikKoma: Multimedia";
			$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository, music player, mp3 player, player, vlc, music, codec, flash";
		}
		else if($_GET['category'] == 'internet'){
			$description = "TitikKoma: Internet";
			$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			$title 		 = "TitikKoma: All Application with Category Internet";
			$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository";
		}
		else if($_GET['category'] == 'utility'){
			$description = "TitikKoma: Utility";
			$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			$title 		 = "TitikKoma: Utillity";
			$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository";
		}
	}


	else if($file == "/application.php"){
		$description = "";
		$url = "";
		$title = "";
		$keywords = "";
	}
?>
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="keywords" content="<?php echo $keywords; ?>">

		<meta name="og:description" content="<?php echo $description; ?>">
		<meta name="og:title" content="<?php echo $title; ?>">
		<meta name="og:url" content="<?php echo $url; ?>">
		<meta name="og:site_name" content="TitikKoma">

		<meta name="twitter:card" content="summary">
    	<meta name="twitter:url" content="<?php echo $url; ?>">
    	<meta name="twitter:title" content="<?php echo $title; ?>">
    	<meta name="twitter:description" content="<?php echo $description; ?>">

