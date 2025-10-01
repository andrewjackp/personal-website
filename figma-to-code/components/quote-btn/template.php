<?php
	$outlineStyle = $action['outlineStyle'] ?? "";
	$content = $action['content'] ?? "";
	$img = $action['img'] ?? "";
?>

<a href="#" class="quote button <?=$outlineStyle?>"><?=$action['content']?> 
		<picture>
			<img src="<?=$action['img']?>" alt="arrow-btn">
		</picture>
</a>