<?php
	/* router */
	
	function getCurrentPageSlug() {
		$page = "home";

		if (isset($_GET["page"]) ) {
			$page = $_GET["page"];
		} 

		return $page;
	}
	
	function getTemplate() {

		$slug = getCurrentPageSlug();
		
		$pageFilePath = 'templates/pages/' . $slug . '/' . "index.php";
		
		if( file_exists($pageFilePath) ) {
			include('templates/pages/' . $slug . '/' . "index.php");
		} else {
			include("templates/pages/404.php");
		}

		return $slug;
	}


	function getPageData($page) {

		$pageDataFilePath = "data/pages/$page.json";

		if( file_exists($pageDataFilePath) ) {
			$thePageJson = file_get_contents($pageDataFilePath);
			$pageData = json_decode($thePageJson, true);

			return $pageData;
		}

		echo "No data found";
		return null;
	}
?>