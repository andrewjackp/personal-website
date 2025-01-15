<?php
	$previews = $props['previews'] ?? [];
	$actions = $props['actions'] ?? [];
?>

<previews>
	
<p class="quiet-voice">Your Visual Language Partner</p>

<h1 class="attention-voice">Consistency Across All Faces (and Tentacles)</h1>
	
<ul class="preview-list">
	<?php foreach($previews as $preview) { ?>
		<li>
			<article class="preview-card">
				<h3 class="loud-voice"><?=$preview['heading']?></h3>
				<p class="quiet-voice"><?=$preview['content']?></p>
			</article>
		</li>
	<?php } ?>
</ul>

<div class="button-container">
	<?php foreach($actions as $action): ?>
		<?php include("components/$action[buttonType]/template.php"); ?>
	<?php endforeach; ?>
</div>

</previews>