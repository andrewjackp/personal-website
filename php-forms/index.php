<?php
	/* E4P interface garden — one folder per exercise */

	$exercises = [
		"01-saying-hello" => "Saying Hello",
		"02-counting-characters" => "Counting the Number of Characters",
		"03-printing-quotes" => "Printing Quotes",
		"04-mad-lib" => "Mad Lib",
		"05-simple-math" => "Simple Math",
		"06-retirement-calculator" => "Retirement Calculator",
		"07-area-of-a-room" => "Area of a Rectangular Room",
		"08-pizza-party" => "Pizza Party",
		"09-paint-calculator" => "Paint Calculator",
		"10-self-checkout" => "Self-Checkout",
		"11-currency-conversion" => "Currency Conversion",
		"12-simple-interest" => "Computing Simple Interest",
		"13-compound-interest" => "Determining Compound Interest",
		"14-tax-calculator" => "Tax Calculator",
		"15-password-validation" => "Password Validation",
		"16-legal-driving-age" => "Legal Driving Age",
		"17-blood-alcohol" => "Blood Alcohol Calculator",
		"18-temperature-converter" => "Temperature Converter",
		"19-bmi-calculator" => "BMI Calculator",
		"20-multistate-sales-tax" => "Multistate Sales Tax Calculator",
	];

	// the folder this page lives in (e.g. /php-forms) so links work with or without a trailing slash
	$base = dirname($_SERVER["SCRIPT_NAME"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>E4P Interface Garden</title>
</head>
<body>

	<h1>E4P Interface Garden</h1>

	<ol>
		<?php foreach ($exercises as $folder => $title) { ?>
			<li><a href="<?= $base ?>/<?= $folder ?>/"><?= $title ?></a></li>
		<?php } ?>
	</ol>

	<p><a href="<?= $base ?>/checklists/">Checklists</a></p>

	<p><a href="<?= $base ?>/monster-adoption/">Monster Adoption</a> (<a href="<?= $base ?>/monster-adoption/style-tile.php">style tile</a>)</p>

	<p><a href="<?= $base ?>/count-chars/">Earlier attempt (#2 + #3 together)</a></p>

</body>
</html>
