<?php 
	require('config.php'); 
	require('functions.php');
	include('router.php');
?>

<?php include('header.php'); ?>

<?php
	
	$pageData = getPageData($page);

	if ($pageData) {

		getTemplate($page);

	} else {
		include("templates/pages/404.php");
	}
?>

<?php include('footer.php'); ?>