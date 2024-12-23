

<?php 
	require('config.php'); 
	require('functions.php');
	require('router.php');
	require('header.php');
?>


<?php

	getTemplate($currentPageSlug);

?>

<?php require('footer.php'); ?>