<?php 
	require('config.php'); 
	require('functions.php');
	include('router.php');
?>

<?php include('header.php'); ?>

<?php
	$slug = getCurrentPageSlug();

	if ($slug) {
		
		getTemplate();

	} else {
		include("templates/pages/404.php");
	}
?>

<?php include('footer.php'); ?>