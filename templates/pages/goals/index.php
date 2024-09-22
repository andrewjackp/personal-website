<?php 
	$pageTitle = "Goals";
	$content = "Here are some career goals of mine. Short term, medium term, long term. For life, etc.";
	include('templates/modules/page-header/template.php');
?>

<?php
	$goals_data = getData('data/goals.json');
?>
	<?php foreach($goals_data as $goals) { ?>
		<div class="info">
			<h2 class="attention-voice"><?=$goals["heading"]?></h2>
				<?php foreach($goals["goals"] as $goal) { ?>
					<span class="soft-voice"><?=$goal?></span>
				<?php } ?>
	<?php } ?>