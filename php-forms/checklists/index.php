<?php
	/* Checklists — checked items are saved to progress.json */

	include __DIR__ . "/data.php";

	$progressFile = __DIR__ . "/progress.json";

	// when the form is submitted, save which boxes are checked
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$done = $_POST["done"] ?? [];
		file_put_contents($progressFile, json_encode($done, JSON_PRETTY_PRINT));
	}

	// load what's been checked so far
	$done = [];
	if (file_exists($progressFile)) {
		$done = json_decode(file_get_contents($progressFile), true) ?? [];
	}

	// the php-forms folder, so links work with or without a trailing slash
	$base = dirname(dirname($_SERVER["SCRIPT_NAME"]));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Checklists</title>
</head>
<body>

	<a href="<?= $base ?>/">&larr; All exercises</a>

	<h1>Checklists</h1>

	<form method="post">

		<?php foreach ($checklists as $listKey => $list) { ?>
			<?php
				$total = count($list["items"]);
				$checked = 0;
				foreach ($list["items"] as $itemKey => $item) {
					if (in_array("$listKey/$itemKey", $done)) {
						$checked++;
					}
				}
			?>

			<h2><?= $list["title"] ?> (<?= $checked ?>/<?= $total ?>)</h2>

			<ul>
				<?php foreach ($list["items"] as $itemKey => $item) { ?>
					<li>
						<label>
							<input
								type="checkbox"
								name="done[]"
								value="<?= "$listKey/$itemKey" ?>"
								<?= in_array("$listKey/$itemKey", $done) ? "checked" : "" ?>
							>
							<?= $item["label"] ?>
						</label>
						— <a href="<?= $base ?>/<?= $item["practice"] ?>">practice</a>
						<br><small><?= $item["note"] ?></small>
					</li>
				<?php } ?>
			</ul>
		<?php } ?>

		<button type="submit">Save progress</button>

	</form>

</body>
</html>
