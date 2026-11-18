<?php
/*
	E4P #02 — Counting the Number of Characters

	INPUTS:
	-

	PROCESSING:
	-

	OUTPUTS:
	-

	CONSTRAINTS (from the book):
	-

	CHALLENGE I'm doing:
	-

	NOTES (what tripped me up / what I'd do in JS):
	-

	next:


	show the form asking user to type a STRING. if the input is not empty, submit.

	number of characters is counted upon submit

	the user's inputted string and number of characters is displayed together.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>#02 Counting the Number of Characters</title>
</head>
<body>

	<a href="../">&larr; All exercises</a>

	<h1>#02 Counting the Number of Characters</h1>


	<?php

		function getInput($key) {
			$value = $_POST[$key] ?? "";
			return is_string($value) ? trim($value) : "";
		}

		function escape($value) {
		   return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
		}
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$userStr = $_POST["userStr"];
		}

		function countChar($userStr){
			$count = strlen($userStr);
			return "$userStr has $count characters";
		}

		if ($userStr != "") {
			$userStr = countChar($userStr);
		}
	?>

		<form method="post">
			<label>Type something!</label>
			<input type="text" id="name" name="userStr">
			<button type="submit">Time to Count</button>
		</form>

		<?php if ($userStr != "") { ?>
			<p><?= $userStr ?></p>
		<?php } ?>

</body>
</html>
