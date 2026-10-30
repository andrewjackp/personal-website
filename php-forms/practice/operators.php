<?php
/*
	Practice: Operators and booleans

	Echo the result of comparisons like 5 > 3 and 5 == "5". Why do true and false print as 1 and nothing? Look up var_dump().
	Type everything out. No copy-paste.

	What I learned:
	-
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Practice: Operators and booleans</title>
</head>
<body>

	<a href="../checklists/">&larr; Checklists</a>

	<h1>Practice: Operators and booleans</h1>

	<?php
	// echo a comparison
		echo 5 > 3;
		echo "<br>";
	
		echo 5 < 3;
		echo "<br>";
	
		echo 5 == "5";
		echo "<br>";
	
		echo 5 === "5";
		echo "<br>";
	
		// var_dump shows the type AND the value
		var_dump(5 > 3);
		echo "<br>";
	
		var_dump(5 < 3);
		echo "<br>";
	
		var_dump(5 == "5");
		echo "<br>";
	
		var_dump(5 === "5");
		echo "<br>";

		echo 10 >= 10;
		echo "<br>";

		echo 10 != 3;
		echo "<br>";

		echo 5 > 3 && 2 > 4;
		echo "<br>";

		echo 5 > 3 || 2 > 4;
		echo !true;
	?>

</body>
</html>
