<?php 
	include('modules/page-header/template.php');

	$reviews= $props['reviews'] ?? [];
	$cardStyle = $props['cardStyle'] ?? "default";
	$img = $props['img'] ?? "";

?>

<testimonials>
	<ul class="review-list">
		<?php foreach($reviews as $review) { ?>
			<li>
				<article class="review-card">
					<picture>
						<img src="images/5-star.svg" alt="">
					</picture>
					<p class="quiet-voice"><?=$review['quote']?></p>
					<picture>
						<img src="<?=$review['img']?>" alt="">
					</picture>
					<span class="quiet-voice"><?=$review['name']?></span>
				</article>
			</li>
		<?php } ?>
	</ul>
</testimonials>

