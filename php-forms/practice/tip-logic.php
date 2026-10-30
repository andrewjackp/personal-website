<?php
/*
	Practice: Tip logic

	Type out the tip example with echos in each block. Try tips of 5, 12, 20 and 50 and write down what prints. Can you ever reach "Wowza"? Fix it.
	Type everything out. No copy-paste.

	What I learned:
	-
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Practice: Tip logic</title>
</head>
<body>

	<a href="../checklists/">&larr; Checklists</a>

	<h1>Practice: Tip logic</h1>

	<?php
		$tip = 16; // percent

		if ($tip > 15) {
			echo "wowza!";
		} elseif ($tip > 10) {
			echo "wow nice?";
		} else {
			echo "did i do my job?";
		}
	?>

</body>
</html>
