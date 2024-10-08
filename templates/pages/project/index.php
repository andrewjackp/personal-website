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

		<inner-column>

			<h1 class="loud-voice"><?=$title?></h1>

			<p><?=$teaser?></p>

		</inner-column>
	</header>



<?php foreach ($sections as $section) {
	$module = $section["module"];
	?>

	<section>
		<inner-column>
			<?php include("templates/modules/$module/template.php"); ?>
		</inner-column>
	</section>
	

<?php } ?>	
</article>
