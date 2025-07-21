
<testimonials>
	<?php 
	include('modules/page-header/template.php');

	$reviews= $props['reviews'] ?? [];
	$reviewStyle = $props['reviewStyle'] ?? "default";
	$img = $props['img'] ?? "";

	$articleCard = $props['articleCard'] ?? "";
	?>
	<ul class="review-list <?=$reviewStyle?>">
		<?php foreach($reviews as $review) { ?>
			<li>
				<article class="review-card <?=$articleCard?>">
					<picture class="star-rating">
						<img src="images/5-star.svg" alt="">
					</picture>
					<p class="soft-voice"><?=$review['quote']?></p>
					<picture>
						<img src="<?=$review['img']?>" alt="">
					</picture>
					<span class="quiet-voice"><?=$review['name']?></span>
				</article>
			</li>
		<?php } ?>
	</ul>
</testimonials>

