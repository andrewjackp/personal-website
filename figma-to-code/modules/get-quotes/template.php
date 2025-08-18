<?php 
	$actions = $props['actions'] ?? [];
?>

<quotes>
	<p class="quiet-voice">Unlock the value of a tailored visual system designed to evolve with your organization.</p>
	<h1 class="attention-voice">Partner With Us Today</h1>
	<div class="button-container">
		<?php foreach($actions as $action):?>
			<?php include("components/$action[buttonType]/template.php");?>
		<?php endforeach; ?>			
	</div>
</quotes>