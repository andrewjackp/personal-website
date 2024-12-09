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

	} 
?>

<?php include('footer.php'); ?>