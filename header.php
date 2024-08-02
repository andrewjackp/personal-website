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
<html lang='en'>
	<head>
	<meta charset='utf-8'>
	<base href="<?=BASE_URL?>">
	<meta name='viewport' content='width=device-width	initial-scale=1'>
	<title>Andy Polito</title>
	<meta name='description' content='Andy Polito'>
	<meta property='og:image' content='https://peprojects.dev/beta-one/andy/layout-garden/images/meta-wrestle.jpg'>
	<link rel="stylesheet" href="/css/style.css">
	</head>
	<body>
		<header class='site-header'>
			<inner-column>
				<a href="index.php">
					<picture>
						<img src="images/wrestling-ring.svg" alt="wrestling-ring" width="100">
					</picture>
				</a>
				<ul>
					<li><a href="practice-projects/php-practice/intro-forms.php">Forms</a></li>
					<li><a href="contact/contact.php">Contact</a></li>
				</ul>
			</inner-column>
		</header>
		<main class='page-content'>