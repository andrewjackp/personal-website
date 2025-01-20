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
	</head>

	<body class="<?=getCurrentPageSlug()?>">
		<header class='site-header'>
			<inner-column>
				<?php include('templates/partials/mast-head.php');?>
			</inner-column>
		</header>

		<main class='page-content'>