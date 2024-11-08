<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name='description' content='Mockup To Code'>
	<title>Mockup To Code</title>
	<link rel="stylesheet" href="styles/site.css">
</head>
<body>
	<header id="top">
		<inner-column>
			<?php include('modules/mast-head/template.php'); ?>
		</inner-column>
	</header>
	
	<main id="page-content">
		<section class='hero' id='hero'>
			<inner-column>
				<?php include('modules/hero/template.php'); ?>
			</inner-column>
		</section>
		<section class='center-content' id='center-content'>
			<inner-column>
				<?php include('modules/center-content/template.php'); ?>
			</inner-column>
		</section>
			<section class='feature' id='feature'>
			<inner-column>
				<?php include('modules/feature/template.php'); ?>
			</inner-column>
		</section>
			<section class='clients' id='clients'>
			<inner-column>
				<?php include('modules/clients/template.php'); ?>
			</inner-column>
		</section>
		<section class='call-to-action' id='call-to-action'>
			<inner-column>
				<?php include('modules/call-to-action/template.php'); ?>
			</inner-column>
		</section>
		<section class='faqs' id='faqs'>
			<inner-column>
				<?php include('modules/faqs/template.php'); ?>
			</inner-column>
		</section>
	</main>

	<footer>
		<inner-column></inner-column>
	</footer>

	<script src="modules/feature/controller.js"></script>
	<script src="modules/clients/controller.js"></script>
	<script src="modules/faqs/controller.js"></script>
</body>
</html>