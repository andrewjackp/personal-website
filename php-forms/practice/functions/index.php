<?php
/*
	Practice: Functions

	Follow along with the video and do the challenges here. Time how long it takes. Pages for scope, return values and built-ins are in this folder too.
	Type everything out. No copy-paste.

	What I learned:
	-
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Practice: Functions</title>
</head>
<body>

	<a href="../../checklists/">&larr; Checklists</a>

	<h1>Practice: Functions</h1>

	<?php
		$bet = 2;

		function monsterGenerator($name, $age, $favoriteFood) {
			$monster = [
				"name" => $name,
				"age" => $age,
				"favoriteFood" => $favoriteFood
			];
			return $monster;
		}

		$crunchy = monsterGenerator("Crunchy", 6, "pork rinds");
		$crusty = monsterGenerator("Crusty", 6, "old bread");
		$dusty = monsterGenerator("Dusty", 6, "off-brand cola");
		$chunky = monsterGenerator("Chunky", 6, "corn on the cob");
		$chubby = monsterGenerator("Chubby", 6, "marshmallow");

		$monsters = [$crunchy, $crusty, $dusty, $chunky, $chubby];
	?>

	<ul class='monsters'>
		<?php foreach ($monsters as $monster) {

			$name = $monster["name"];
			$favoriteFood = $monster["favoriteFood"];
			$age = $monster["age"];

		?>

			<li class='monster'>
				<monster-card id='<?= $id ?>'>
					<h2 class='name'><?= $name ?></h2>
					<p class='favoriteFood'><?= $favoriteFood ?></p>
					<p class='age'><?= $age ?></p>
				</monster-card>
			</li>

		<?php } ?>
	</ul>

</body>
</html>
