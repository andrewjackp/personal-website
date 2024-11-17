<!doctype html>

<?php require('router.php'); ?>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="">
		<title><?=$page?></title>
		<!-- meta -->
		<link rel="stylesheet" href="styles/site.css">
	</head>

	<body class='<?=$page?>'>
		<header>
			<section>
				<inner-column>
					<?php include('mast-head/template.php'); ?>
				</inner-column>
			</section>
		</header>

		<main class="page-content">
			<section>
				<inner-column>
					<?php getTemplate($page); ?>		
				</inner-column>
			</section>	
		</main>

		<footer>
			<inner-column>
				<?php include('modules/footer/template.php'); ?>
			</inner-column>
	</footer>
	</body>
</html>