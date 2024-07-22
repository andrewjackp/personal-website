<link rel="stylesheet" href="/andy-polito/css/style.css">
<style>
	.card {
		border: 2px solid black;
		border-radius: 8px;
		padding: 16px;
	}
	picture {
			margin-top: 20px;
			border-radius: 8px;
			overflow: hidden;
			max-width: 250px;
			
			img {
				object-fit: cover;
				width: 100%;
				height: auto;
			}
		}
	.info {
		align-self: center;
	}
	.card-list {
		display: grid;
		grid-template-columns: 1fr;
		gap: 20px;
		padding: 16px;
	}

		@media (width > 800px) {
			.card-list {
				grid-template-columns: repeat(6, 1fr);
					&:nth-of-type(3), &:nth-of-type(5), &:nth-of-type(8) {
			grid-column: span 3;
		}
			}
	}	
</style>

<?php

$lima = [
	"id" => 1256,
	"name" => "Limabean",
	"favoriteFood" => "Lima beans",
	"age" => 4,
	"adopted" => false,
	"portrait" => "/images/limabean.jpg",
];

$mrbanana = [
	"id" => 1259,
	"name" => "Mr. Banana",
	"favoriteFood" => "Bananas",
	"age" => 4,
	"adopted" => false,
	"portrait" => "/images/mr-banana.jpg",
];

$orangina = [
	"id" => 1759,
	"name" => "Orangina",
	"favoriteFood" => "Oranges",
	"age" => 5,
	"adopted" => true,
	"portrait" => "/images/orangina.jpg",
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

