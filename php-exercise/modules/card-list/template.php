<?php 
	$cards = $props['cards'] ?? [];
	$cardStyle = $props['cardStyle'] ?? "default";
?>

<ul class="card-list <?=$cardStyle?>" >
	<?php foreach($cards as $card) { ?> 
		<li>
			<article class="card">
				<h1><?=$card['heading']?></h1>
				<p><?=$card['content']?></p>
			</article>
		</li>
	<?php } ?>
</ul>
