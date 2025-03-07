<!doctype html>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<base href="<?=BASE_URL?>">
		<meta name='viewport' content='width=device-width	initial-scale=1'>
		<title><?=$pageData["title"] ?? "page not found" ?></title>
		<meta name='description' content='Andy Polito'>
		<meta property='og:image' content='https://peprojects.dev/beta-one/andy/layout-garden/images/meta-wrestle.jpg'>
		<link rel="stylesheet" href="css/site.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Jost:ital,wght@0,100..900;1,100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
	</head>

	<body class="<?=getCurrentPageSlug()?>">
		<header class='site-header'>
			<inner-column>
				<?php include('templates/partials/mast-head.php');?>
			</inner-column>
		</header>

		<main class='page-content'>