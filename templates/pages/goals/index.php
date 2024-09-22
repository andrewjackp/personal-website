<?php
	$goals_data = getData('data/goals.json');
?>
	<?php foreach($goals_data as $goals) { ?>
		<section>
			<inner-column>
				<h2 class="loud-voice"><?=$goals["heading"]?></h2>
				<?php foreach($goals["goals"] as $goal) { ?>
					<span class="soft-voice"><?=$goal?></span>
				<?php } ?>
			</inner-column>
		</section>
	<?php } ?>