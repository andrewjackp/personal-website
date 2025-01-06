<?php 
	$cards = $props['cards'] ?? [];
	$cardStyle = $props['cardStyle'] ?? "default";
	$img = $props['img'] ?? "";

	include('modules/page-header/template.php');
?>

<features>
	<ul class="feature-list <?=$cardStyle?>">
		<?php foreach($cards as $card) { ?> 
			<li>
				<article class="feature-card">
					<span class="id-voice"><?=$card['id']?></span>

					<card-text>
						<h2 class="loud-voice"><?=$card['heading']?></h2>
						<p class='quiet-voice'><?=$card['content']?></p>
					</card-text>
					
					<picture>
						<img src="<?=$card['img']?>" alt="none">
					</picture>
				</article>
			</li>
		<?php } ?>
	</ul>
</features>