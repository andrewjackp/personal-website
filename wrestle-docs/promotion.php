<?php
	$id = $_GET["id"];

	$promotion_data = getData('data/promotions.json');

	$promotion = getPromotionById($promotion_data, $id);

	var_dump($promotion);
?>