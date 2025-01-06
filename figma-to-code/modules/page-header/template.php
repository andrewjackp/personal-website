<?php 
	$heading = $props['heading'] ?? "Etiam nulla lectus amet nunc molestie at vulputate.";
	$caption = $props['caption'] ?? "Neque, pulvinar vestibulum non aliquam.";
	$titleStyle = $props['titleStyle'] ?? "default";
?>

<page-header>
	<h1 class="attention-voice <?=$titleStyle?>"><?=$heading?></h1>
	<p class="quiet-voice"><?=$caption?></p>
</page-header>