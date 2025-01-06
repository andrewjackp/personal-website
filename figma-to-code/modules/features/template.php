<?php 
	$cards = $props['cards'] ?? [];
	$cardStyle = $props['cardStyle'] ?? "default";
?>

<features>
	<ul class="feature-list <?=$cardStyle?>">
		<?php foreach($cards as $card) { ?> 
			<li>
				<article class="feature-card">
					<span class="id-voice"><?=$card['id']?></span>
					<h2 class="loud-voice"><?=$card['heading']?></h2>
					<p class='quiet-voice'><?=$card['content']?></p>
				</article>
			</li>
		<?php } ?>
	</ul>
</features>