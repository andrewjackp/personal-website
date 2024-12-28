<?php
	/* router */

	function getCurrentPageSlug() {
		$pageSlug = "home";

		if (isset($_GET["page"]) ) {
			$pageSlug = $_GET["page"];
		} 

		return $pageSlug;
	}

	$currentPageSlug = getCurrentPageSlug();


	function getPageData($slug) {

		$pageDataFilePath = "data/pages/$slug.json";

		if( file_exists($pageDataFilePath) ) {
			$thePageJson = file_get_contents($pageDataFilePath);
			$pageData = json_decode($thePageJson, true);

			return $pageData;
		}

		return null;
	}

	function getTemplate($slug) {

		// back up template

		$templateName = "home";

		$pageData = getPageData($slug);

		// if we have a page template, assign to the slug.
		if( isset($pageData['template']) ) {
			// then load the template
			$templateName = $pageData['template'];
		} else {
			// look for page specific template
			// template will most likely share name with slug
			$templateName = $slug;
		}
		
		$pageFilePath = "templates/pages/$templateName.php";

		if( file_exists($pageFilePath) ) {

			include($pageFilePath);

		} else {

			include("templates/pages/404.php");
		}
	}

	$pageData = getPageData($currentPageSlug);
?>