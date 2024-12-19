<?php 
	require('config.php'); 
	require('functions.php');
	require('router.php');
	require('header.php');
?>


<?php
	$slug = getCurrentPageSlug();
	$page = "home";

	if ($slug) {
		getTemplate();
	};


?>

<?php require('footer.php'); ?>