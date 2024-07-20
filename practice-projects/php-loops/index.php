<link rel="stylesheet" href="/andy-polito/css/style.css">
<style>
	.card {
		display: grid;
		grid-template-columns: 1fr 1fr;
		gap: 10px;
	}
	.info {
		align-self: center;
	}
	.card-list {
		display: grid;
		gap: 10px;
	}
</style>

<?php

$lima = [
	"id" => 1256,
	"name" => "Limabean",
	"favoriteFood" => "Lima beans",
	"age" => 4,
	"adopted" => false,
	"portrait" => "/andy-polito/images/limabean.jpg",
];

$mrbanana = [
	"id" => 1259,
	"name" => "Mr. Banana",
	"favoriteFood" => "Bananas",
	"age" => 4,
	"adopted" => false,
	"portrait" => "/andy-polito/images/mr-banana.jpg",
];

$orangina = [
	"id" => 1759,
	"name" => "Orangina",
	"favoriteFood" => "Oranges",
	"age" => 5,
	"adopted" => true,
	"portrait" => "/andy-polito/images/orangina.jpg",
];



$monsters = [$lima, $mrbanana, $orangina];

echo "<ul class='card-list'>";

foreach ($monsters as $monster) {
	$id = $monster["id"]; 
	$name = $monster["name"];
	$portrait = $monster["portrait"];
	$status = $monster["adopted"];
	$food = $monster["favoriteFood"];

	if ($status == 1) {
		$status = "adopted!";
	} else {
		$status = "Needs a home";
	}

	echo "<li class='monster'>";

	echo
		"<article class='card' id=' ". $id . "'>" .
			"<picture class='portrait'>" .
				"<img src='" . $portrait . "' width= '200' >" .
			"</picture>" .	
		"<div class='info'>" .
			"<h2 class='name'>" . $name . "</h2>" .
			"<p class='story'>" . $story . "</p>" .
			"<p class='status'>" . $status . "</p>" .
		"</div" .
		"</article>";

	echo "</li>";

}

echo "</ul>";

