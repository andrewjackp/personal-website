
<?php
	$heading = $article['heading'] ?? "Default heading"; /* backup! / default */
	$description = $article['description'];
	$thumbnail = $article['thumbnail'];
?>

<article class='article-card'>
	<picture>
		<img src='images/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<div class="link-box">
			<p class='teaser'><?=$description?></p>

		<a class='article-card-button' href='#'>
			<picture>
				<img src="images/arrow-button.svg" alt="arrow">
			</picture>
		</a>
		</div>
	</text-content>
</article>
