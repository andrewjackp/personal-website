<!doctype html>

<?php require('functions.php'); ?>
<?php require('router.php'); ?>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="images/still-real.jpg">
		<title><?=$page?></title>
		<!-- meta -->
		<link rel="stylesheet" href="css/site.css">
	</head>

	<body class='<?=$page?>'>
		<header>
			<?php include('site-menu.php'); ?>
		</header>

		<main class="page-content">
			<?php getTemplate($page); ?>			
		</main>

	</body>
</html>