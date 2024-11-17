<?php
	/* router */
	$page = null;

	// if there's a page, set it to whatever it is
	if (isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	}

	function getTemplate($page) {
		include($page . '.php');
	}
?>