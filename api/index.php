<?php include "../components/connection.php";

header("Content-type:application/json");


$query = mysqli_query($con, "SELECT * FROM tbl_app");


// while($data = mysqli_fetch_array($query)){	
// 	print_r($data);
// }


while($data = mysqli_fetch_array($query)){
	$json[] = array(
		"id_app"=>$data['id_app'],
		"title_app"=>$data['title_app'],
		"distro_app"=>$data['distro_app'],
		"architecture"=>$data['architecture'],
		"description"=>$data['description'],
		"time"=>$data['publishing']
	);
}


$results[] = array(
	"status"=>"ok",
	"data"=>$json
);

echo json_encode($results);