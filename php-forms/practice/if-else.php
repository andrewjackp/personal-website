<?php
/*
	Practice: if / elseif / else

	Write the logged-in example. Flip true to false. Then make your own: a $age that shows a different message for kid, teen and adult.
	Type everything out. No copy-paste.

	What I learned:
	-
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Practice: if / elseif / else</title>
</head>
<body>

	<a href="../checklists/">&larr; Checklists</a>

	<h1>Practice: if / elseif / else</h1>

	<?php
		$age = 32;

		if ($age < 13) {
			echo "you're a child";
		} else if ($age < 18) {
			echo "you're a teen";
		} else {
			echo "you're an adult";
		}
	?>

</body>
</html>
