<?php 
	$file = $_SERVER['SCRIPT_NAME']; 
	if($file == "/index.php"){
		// config seo

		$description = "It's easy to install linux applications present on your computer. All the way to install applications using the existing terminal here.";
		$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		$title 		 = "TitikKoma: Sebuah Program diakhiri dengan TitikKoma";
		$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository";
	}

	else if($file == "/category.php") {
		if($_GET['category'] == 'all'){
			$description = "Aplikasi yang telah tersedia di linux dan cara instalasinya telah disederhanakan";
			$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			$title 		 = "TitikKoma: All Application";
			$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository";
		}
		else if($_GET['category'] == 'programming'){
			$description = "Now, most of the programming of applications are already available on Linux and how the installation has been simplified";
			$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			$title 		 = "TitikKoma: Programming";
			$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository, programming, texteditor, debug, compiler, node";
		}
		else if($_GET['category'] == 'office'){
			$description = "want to do office work such as creating a document with a word processing application, presentation and process data with spreadsheet applications. everything is there and it's free";
			$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			$title 		 = "TitikKoma: Office";
			$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository, microsoft office, open office, wps, microsoft word, libre office, word processing, excel, doc, docx, ppt";
		}
		else if($_GET['category'] == 'multimedia'){
			$description = "watch movies, listen to music and edit video for you to use commercial purposes such as youtube monetize without adding costs.";
			$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			$title 		 = "TitikKoma: Multimedia";
			$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository, music player, mp3 player, player, vlc, music, codec, flash";
		}
		else if($_GET['category'] == 'internet'){
			$description = "surf the Internet, read the news portal and download the video and do not forget to interact with friends using social media, using an application that helps you connect to the internet";
			$url 		 = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			$title 		 = "TitikKoma: All Application with Category Internet";
			$keywords 	 = "titikkoma, ppa, install, terminal, aplikasi, ubuntu, apt-get, arch, repository";
		}
		else if($_GET['category'] == 'utility'){
			$description = "Apps that help you in the future, yet you need. but at least you install to solve the problem";
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
	
		<meta property="fb:app_id" content="1129385450445313" />

		<meta name="description" content="<?php echo $description; ?>" />
		<meta name="keywords" content="<?php echo $keywords; ?>" />

		<meta property="og:description" content="<?php echo $description; ?>" />
		<meta property="og:title" content="<?php echo $title; ?>" />
		<meta property="og:url" content="<?php echo $url; ?>" />
		<meta property="og:site_name" content="TitikKoma" />
		<meta property="og:image" content="http://titikkoma.xyz/image/ogimage.jpg" />


		<meta property="twitter:card" content="summary" />
    	<meta property="twitter:url" content="<?php echo $url; ?>" />
    	<meta property="twitter:title" content="<?php echo $title; ?>" />
    	<meta property="twitter:description" content="<?php echo $description; ?>" />

