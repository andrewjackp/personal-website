<?php 
	require('config.php'); 
	require('functions.php');
	require('router.php');
	require('header.php');
?>

<?php
	$slug = getCurrentPageSlug();

	if ($slug) {
		
		getTemplate();

	} 
?>

<?php include('footer.php'); ?>