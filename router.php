<?php
	/* router */
	$page = null;
	if (isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home/index";
	}

	function getTemplate($page) {
		include($page . '.php');
	}
?>