<?php 
	$currentPageSlug = $_GET["page"] ?? "one";

	include("data/$currentPageSlug.php");

	function getModule($name){
		$filePath = "modules/$name/template.php";
		if (file_exists ($filePath) ) {
			include($filePath);
		} else {
			echo "no module called $name";
		}
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Stuff</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<?php include('components/site-menu/site-menu.php');?>
	</header>

	<main>
		<header>
			<h1><?=$pageData['name']?></h1>
		</header>

		<?php 
			foreach($pageData["sections"] as $section) {
				getModule($section['moduleName']);
			}
		?>
	</main>

	<footer>
		Footer
	</footer>
</body>
</html>