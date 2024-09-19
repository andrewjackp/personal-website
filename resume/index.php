
<?php
	$resume_data = getData('data/resume.json');
    $positions = $resume_data["positions"];
    $schools = $resume_data["education"];
?>

<?php foreach( $positions as $position ) { ?>

	<div class='info'>
		<h2 class='mid-voice'><?=$position["type"]?></h2>
		<p class='ink-voice'><?=$position["years"]?></p>
		<p class='soft-voice'><?=$position["tasks"]?></p>
		<p class='soft-voice'><?=$position["tools"]?></p>
	</div>

<?php } ?>

<?php foreach( $schools as $schooling ) { ?>

	<div class='info'>
		<h2 class='mid-voice'><?=$schooling["institution"]?></h2>
		<p class='ink-voice'><?=$schooling["studies"]?></p>
	</div>

<?php } ?>