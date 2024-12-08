<?php
	/* router */
	$page = "home";

	if (isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} 
	
	function getTemplate($page) {
		echo "PAGE";
		$pageFilePath = 'templates/pages/' . $page . '/' . "index.php";
		
		if( file_exists($pageFilePath) ) {
			include('templates/pages/' . $page . '/' . "index.php");
		} 
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