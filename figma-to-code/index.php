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

	function getModule($name, $props = []) {
		$filePath = "modules/$name/template.php";
		if (file_exists ($filePath) ) {
			include($filePath);
		} else {
			echo "no module called $name";
		}
	}

	function getHeader($name, $props = []) {
		$filePath = "modules/header/$name/template.php";
		if (file_exists ($filePath) ) {
			include($filePath);
		} else {
			echo "no module called $name";
		}
	}

	function getFooter($name, $props = []) {
		$filePath = "modules/footer/$name/template.php";
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

	<header class=<?=$pageData['headerStyle']?>>
			<inner-column>
				<?php foreach($pageData['headers'] as $header):?>
					<?php getHeader($header['name'], $header); ?>
				<?php endforeach; ?>
			</inner-column>
	</header>
	
	<main>
		<?php foreach($pageData["sections"] as $section) { ?>
			<section class="<?=$section['name']?>">
				<inner-column>
					<?=getModule($section['module'], $section)?>
				</inner-column>
			</section>
		<?php } ?>
	</main>

	<footer class=<?=$pageData['footerStyle']?>>
		<section>
			<inner-column>
				<?php foreach($pageData['footers'] as $footer): ?>
					<?php getFooter($footer['name'], $footer)?>
				<?php endforeach; ?>
			</inner-column>
		</section>
	</footer>
	
</body>
</html>