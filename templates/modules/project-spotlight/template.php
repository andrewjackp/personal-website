<?php
	$title = $title ?? "Heading for the page";
	$content = $content ?? "Here is a short introduction to explain which project is on display here.";

	include ('templates/modules/page-header/template.php');

	$projects = getData('data/projects.json');
?>

<project-spotlight>

	<h2 class="attention-voice"><?=$heading?></h2>

	<ul class="project-list">
		<?php foreach ($projects as $project) { ?>
			<?php if ( isset($project["featured"] )) { ?>
			<li class="project">
				<?php include('templates/components/project-card/template.php'); ?>
			</li>
			<?php } ?>
		<?php } ?>
	</ul>

</project-spotlight>