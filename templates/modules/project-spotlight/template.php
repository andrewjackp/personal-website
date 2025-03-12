<?php
	$projects = getData('data/projects.json');
	$project_heading = $project_heading ?? "";
?>

<project-spotlight>

	<h2 class="attention-voice"><?=$project_heading?></h2>

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