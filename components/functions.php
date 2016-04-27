<?php

function setCategory($category){
	if($category == "programming"){
		$cat = "Programming";
	}
	else if($category == "office"){
		$cat = "Office";
	}
	else if($category == "multimedia"){
		$cat = "Multimedia";
	}
	else if($category == "internet"){
		$cat = "Internet";
	}
	else if($category == "utillity"){
		$cat = "Utillity";
	}
	return $cat;
}



function setChecked($var, $var2){
	if($var == $var2){
		echo "checked";
	}
}

function setSelected($var, $var2){
	if($var == $var2){
		echo "selected";
	}
}


function check_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = strip_tags($data);
	$data = filter_var($data);
	$data = htmlspecialchars($data);
	return $data;
}