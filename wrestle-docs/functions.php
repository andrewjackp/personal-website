<?php 

function getData($path) {

	//check if file exists..
	// file_exists...

	$json = file_get_contents($path);
	$data = json_decode($json, true);

	return $data;

}

function getWrestlerById($wrestlers, $id) {
	$found = null;

	foreach($wrestlers as $wrestler) {
		if($wrestler["id"] == $id) {
			$found = $wrestler;

			break;
		}
	}

	return $found;
}

function getPromotionById($promotions, $id) {
	$found = null;

	foreach($promotions as $promotion) {
		if($promotion["id"] == $id) {
			$found = $promotion;

			break;
		}
	}

	return $found;
}
