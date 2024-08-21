<!doctype html>

<?php
	if (isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	}
?>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<title>Wrestle Docs</title>
		<!-- meta -->
	</head>

	<body>
		<?php if ($page == "home") { ?>
			<h1>WrestleDocs Home Page</h1>
		<?php } ?>

		<?php if ($page == "match-list") { ?>
			<h1>WrestleDocs Match List</h1>
		<?php } ?>

		<nav class="site-menu">
			<a href="?page=home">Home</a>
			<a href="?page=match-list">Matches</a>
		</nav>
	</body>
</html>