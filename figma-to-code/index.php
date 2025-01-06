<?php 

	function getCurrentPageSlug() {
		$pageSlug = "template-one";

		if (isset($_GET["page"]) ) {
			$pageSlug = $_GET["page"];
		} 

		return $pageSlug;
	}

	$currentPageSlug = getCurrentPageSlug();


	function getPageData($slug) {

		$pageDataFilePath = "data/$slug.json";

		if( file_exists($pageDataFilePath) ) {
			$thePageJson = file_get_contents($pageDataFilePath);
			$pageData = json_decode($thePageJson, true);

			return $pageData;
		}

		return null;
	}

	$pageData = getPageData($currentPageSlug);

	function getModule($name, $props = []){
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
	<title>Figma To Code</title>
	<link rel="stylesheet" href="css/site.css">
</head>
<body>
	<header>
		<section>
			<inner-column>
				<?php include('components/header/template.php');?>
			</inner-column>
		</section>
	</header>

	<main>
		<?php foreach($pageData["sections"] as $section) { ?>
			<section>
				<inner-column>
					<?=getModule($section['module'], $section)?>
				</inner-column>
			</section>
		<?php } ?>
		
	</main>

	<footer>
		<section>
			<inner-column>
				<?php include('components/footer/template.php');?>
			</inner-column>
		</section>
	</footer>
</body>
</html>