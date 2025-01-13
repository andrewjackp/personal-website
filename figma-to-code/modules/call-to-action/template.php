<?php
	$callToAction = $props['callToAction'] ?? "";
?>

<call-to-action class=<?=$callToAction?>>
	<?php include('modules/page-header/template.php'); ?>
	<div class="button-container">
		<?php 
		$content = "Get Started";
		include('components/blue-button/template.php');
		?>

		<?php
		$text = "Start Free Trial";
		include('components/outline-button/template.php');
		?>
	</div>
</call-to-action>