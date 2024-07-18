<style>
	monster-card {
		display: block;
		border: 2px solid black;
	}
	ol {
		display: flex;
		flex-direction: column;
		list-style: none;
	}
	@media (min-width: 800px) {
			ol {
				display: flex;
				flex-direction: row;
			}
		}
</style>

<?php 

$cody = [
	"id" => 1234,
	"name" => "Codey",
	"favoriteFood" => "mtn dew",
	"age" => 7,
	"adopted" => true,
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$lima = [
	"id" => 1256,
	"name" => "Limabean",
	"favoriteFood" => "Lima beans",
	"age" => 4,
	"adopted" => false,
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$reads = [
	"id" => 467,
	"name" => "miss reads a-lot",
	"favoriteFood" => "Cookies and tea",
	"age" => 9,
	"adopted" => false,
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$monsters = [$cody, $lima, $reads];

echo "<ol>";

foreach ($monsters as $monster) {
	$id = $monster["id"]; 
	$name = $monster["name"];
	$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old";
	$portrait = $monster["portrait"];
	$status = $monster["adopted"];

	if ($status == 1) {
		$status = "adopted!";
	} else {
		$status = "Needs a home";
	}

	echo "<li class='monster'>";

	echo
		"<monster-card id=' ". $id . "'>" .
			"<picture class='portrait'>" .
				"<img src='" . $portrait . "' width= '200' >" .
			"<h2 class='name'>" . $name . "</h2>" .

			"<p class='story'>" . $story . "</p>" .
			"<p class='status'>" . $status . "</p>" .
		"</monster-card>";

	echo "</li>";

}

echo "</ol>";