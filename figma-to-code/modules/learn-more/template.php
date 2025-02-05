<?php
	$actions = $props['actions'] ?? [];
?>

<learn-more>

	<picture>
		<img src="images/cloud.svg" alt="cloud-pic">
	</picture>

	<span class="quiet-voice">
		Your Visual Language Partner
	</span>

	<?php 
		$props['heading'] = "Consistency Across All Faces (and Tentacles)";
		$props['caption'] = "We specialize in monster-friendly design systems that scale from wiggly toes to toothy grins.";
		include('modules/page-header/template.php');
	?>
	
	<div class="button-container">
		<?php foreach($actions as $action):?>
			<?php include("components/$action[buttonType]/template.php"); ?>
		<?php endforeach; ?>	
	</div>

</learn-more>