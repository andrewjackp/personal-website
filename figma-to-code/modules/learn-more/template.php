<?php
	$actions = $props['actions'] ?? [];
	$heading = $props['heading'] ?? "Consistency Across All Faces (and Tentacles)";
	$caption = $props['caption'] ?? "We specialize in monster-friendly design systems that scale from wiggly toes to toothy grins.";
?>

<learn-more>

	<picture>
		<img src="images/cloud.svg" alt="cloud-pic">
	</picture>

	<span class="quiet-voice">
		Your Visual Language Partner
	</span>

	<?php 
		include('modules/page-header/template.php');
	?>
	
	<div class="button-container">
		<?php foreach($actions as $action):?>
			<?php include("components/$action[buttonType]/template.php"); ?>
		<?php endforeach; ?>	
	</div>

</learn-more>