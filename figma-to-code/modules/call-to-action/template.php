<?php
	$callToAction = $props['callToAction'] ?? "";
	$actions = $props['actions'] ?? [];
?>

<call-to-action class=<?=$callToAction?>>
	<?php include('modules/page-header/template.php'); ?>

	<div class="button-container">
		<?php foreach($actions as $action):?>
			<?php include("components/$action[buttonType]/template.php"); ?>
		<?php endforeach; ?>

	</div>
</call-to-action>