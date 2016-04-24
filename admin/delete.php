<?php 
include "../components/connection.php";

$deletePost =  $_GET['delete'];

mysqli_query($con, "DELETE FROM tbl_app WHERE id_app='$deletePost'");

header("Location:login.php");