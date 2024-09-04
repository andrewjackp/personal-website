<?php
	
	$id = 0;

	function getData($path) {
		include($path);
	}

	$wrestlers = getData('wrestlers.json');

	if( strlen($wrestlers) > 0) {
		echo "sup";
	}
?>