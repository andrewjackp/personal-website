<?php 
	$actions = $props['actions'] ?? [];
?>

<quotes>
	<p class="quiet-voice">Rhoncus, accumsan dictum</p>
	<h1 class="attention-voice">Etiam nulla lectus amet nunc molestie at vulputate.</h1>
	<div class="button-container">
		<?php foreach($actions as $action):?>
			<?php include("components/$action[buttonType]/template.php");?>
		<?php endforeach; ?>			
	</div>
</quotes>