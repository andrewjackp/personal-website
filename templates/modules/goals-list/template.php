
<?php
	$goals_data = getData('data/goals.json');
?>

<goals-module>
	<?php foreach($goals_data as $goals) { ?>
		<div class="info">
			<h2 class="attention-voice"><?=$goals["heading"]?></h2>
				<?php foreach($goals["goals"] as $goal) { ?>
					<span class="soft-voice"><?=$goal?></span>
				<?php } ?>
	<?php } ?>
</goals-module>