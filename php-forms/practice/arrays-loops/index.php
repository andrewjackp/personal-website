<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Practice: Looping through arrays</title>

	<link rel="stylesheet" href="/php-forms/practice/arrays-loops/styles.css">
</head>
<body>

	<a href="../../checklists/">&larr; Checklists</a>

	<h1>Practice: Looping through arrays</h1>

<?php include("monster-factory.php"); ?>

<?php foreach ($monsters as $monster) { 
	$name = $monster["name"];
		$portrait = $monster["portrait"];
		$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old";
		$id = $monster["id"];
		$status = $monster["adopted"];

		if ($status == 1) {
			$status = "ADOPTED";
		} else {
			$status = "not adopted";
		}
		?>

		 <li class='monster'>
			<monster-card id=<?= $id ?>>
				<picture class='portrait'>
					<img src=<?= $portrait ?> width='200px'>
				</picture>
						<h2 class='name'><?= $name ?></h2>
						<p class='story'><?= $story ?></p>
						<p class='status'><?= $status ?></p>
			"</monster-card>";

		 "</li>";
<?php } ?>

</body>
</html>