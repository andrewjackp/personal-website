<?php function getData($path) {

	//check if file exists..
	// file_exists...

	$json = file_get_contents($path);
	$data = json_decode($json, true);

	return $data;
}