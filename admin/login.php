<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user'])){
	header("Location:/admin/");
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login To Access and Manage</title>
	<link rel="stylesheet" href="../css/ionicons.min.css">
</head>
<body>
	
	<form action="otentikasi.php" method="post" autocomplete="off">	
		<div class="container">
			<div class="card">
				<div class="header">
					<h1>SIGN IN</h1>
				</div>
				<div class="input email">
				<i class="icon ion-person"></i>
					<input type="text" name="username" placeholder="Username">
				</div>
				<div class="input password">
				<i class="icon ion-locked"></i>
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="button">
					<button name="login" value="true">CREATE YOUR ACCOUNT <i class="icon ion-chevron-right"></i></button>
				</div>
			</div>
		</div>
	</form>







	<style>
	
	body {
		margin:0;
		padding:0;
		font-family:'raleway', helvetica, sans-serif;
	}

div.container {
	height:100vh;
	padding-top:60px;
	background:linear-gradient(190deg, #BFC6E4, #27367A);
}

h1 {
	margin:0;
	padding:25px 10px;
	font-size:30px;
	text-align:center;
	color:#fff;
	letter-spacing:3px;
}

div.card {
	box-shadow:0 3px 30px 0 rgba(0,0,0,0.6);
	width:450px;
	margin:auto;
	box-sizing:border-box;
	background:#fff;
}


div.header {
	background:#495A95;
}

div.input {
	padding:20px 0;
	padding-left:20px;
}

div.input input {
	padding:12px;
	font-size:17px;
	width:80%;
	border:none;
	background:transparent;
	color:#fff;
	letter-spacing:2px;
}
div.input input:focus {
	outline:none;
	background:transparent;
}
div.input input::-webkit-input-placeholder {
	color:#fff;
	font-family:'raleway', helvetica, sans-serif;
	font-size:17px;
	opacity:0.5;
	background:transparent;
}
div.input i {
	top:4px;
	position:relative;
	color:#fff;
	font-size:25px;
	opacity:0.5;
}

.email {
	background:#18A6B1;
}
.password {
	background:#67B3B4;
}


button {
	width:100%;
	padding:24px;
	border:none;
	font-weight:600;
	font-family:'raleway', helvetica, sans-serif;
	font-size:18px;
	color:#6976A8;
	background:#fff;
}
button i {
	padding-left:10px;
}

	</style>
</body>
</html>