<?php
	$projects = getData('data/projects.json');
	$heading = $heading ?? "Project Spotlight Heading"
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