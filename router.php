<?php
	/* router */
	$page = null;
	if (isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	}

	

	function getTemplate($page) {

		$pageFilePath = 'templates/pages/' . $page . '/' . "index.php";
		
		if( file_exists($pageFilePath) ) {
			include('templates/pages/' . $page . '/' . "index.php");
		} 
	}
?>