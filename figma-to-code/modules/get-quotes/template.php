<?php 
	$actions = $props['actions'] ?? [];
	$heading = $props['heading'] ?? "Unlock the value of a tailored visual system designed to evolve with your organization.";
	$content = $props['content'] ?? "Partner With Us Today";
?>

<quotes>
	<p class="quiet-voice"><?=$heading?></p>
	<h1 class="attention-voice"><?=$content?></h1>
	<div class="button-container">
		<?php foreach($actions as $action):?>
			<?php include("components/$action[buttonType]/template.php");?>
		<?php endforeach; ?>			
	</div>
</quotes>