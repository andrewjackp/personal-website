<?php 
	function getFile($path) {
		return dirname(__FILE__) . '/' . $path;
	} 

	function getFileAndInclude($path) {
		include(getFile($path));
	}
?>

<?php include(getFile('config.php')); ?>

<!doctype html>
<?php require('functions.php'); ?>
<!-- require router was here -->
<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<base href="<?=BASE_URL?>">
		<meta name='viewport' content='width=device-width	initial-scale=1'>
		<title>Andy Polito</title>
		<meta name='description' content='Andy Polito'>
		<meta property='og:image' content='https://peprojects.dev/beta-one/andy/layout-garden/images/meta-wrestle.jpg'>
		<link rel="stylesheet" href="/css/site.css">
	</head>

	<body class="<?=$page?>">
		<header class='site-header'>
			<inner-column>
				<?php include('templates/partials/mast-head.php');?>
			</inner-column>
		</header>

		<main class='page-content'>