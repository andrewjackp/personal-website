<?php 
	$cards = $props['cards'] ?? [1, 2, 3];
	$cardStyle = $props['cardStyle'] ?? "default";

	include('modules/page-header/template.php');
?>

<features>
	<ul class="feature-list <?=$cardStyle?>">
		<?php foreach($cards as $card) { ?> 
			<li>
				<article class="feature-card">
					<picture>
						<img src="" alt="">
					</picture>
					<span class="id-voice"><?=$card['id']?></span>
					<h2 class="loud-voice"><?=$card['heading']?></h2>
					<p class='quiet-voice'><?=$card['content']?></p>
				</article>
			</li>
		<?php } ?>
	</ul>
</features>