<?php 

session_start();


session_destroy();


if(isset($_SESSION['id']) && isset($_SESSION['user'])){
	header("Location:/admin/login");
}