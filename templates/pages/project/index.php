<?php
	$projectsJson = getData('data/projects.json');

	foreach ($projectsJson as $project) {
		if ($project["slug"] == $_GET["slug"]) {
			$thisProject = $project; 
		}
	}

	$title = $thisProject["title"];
	$teaser = $thisProject["teaser"];
	$sections = $thisProject["case-study"];
?>

<article>

	<header class="page-header">

			<h1 class="loud-voice"><?=$title?></h1>

			<p><?=$teaser?></p>

	</header>

</article>

<?php foreach ($sections as $section) {
	$module = $section["module"];
	?>

	<?php include("templates/modules/$module/template.php"); ?>

<?php } ?>	

