<?php
	$resume_data = getData('data/resume.json');
   $positions = $resume_data["positions"];
   $schools = $resume_data["education"];
?>

<resume-list>
<?php foreach( $positions as $position ) { ?>
	<h2 class='loud-voice'><?=$position["type"]?></h2>
	<p class='ink-voice'><?=$position["years"]?></p>
	<p class='calm-voice'><?=$position["tasks"]?></p>
	<p class='soft-voice'><?=$position["tools"]?></p>

<?php } ?>
</resume-list>

<?php $pageTitle = "Education" ?>
<?php $intro = "" ?>
<?php include('templates/modules/page-header/template.php');?>
<?php foreach( $schools as $schooling ) { ?>

	<div class='info'>
		<h2 class='calm-voice'><?=$schooling["institution"]?></h2>
		<p class='ink-voice'><?=$schooling["studies"]?></p>
	</div>

<?php } ?>

	