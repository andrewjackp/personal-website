
<?php include ('data/articles.php'); ?>

<articles-intro>
	<header>
		<h2 class='attention-voice'>Dispatches From the Fleet</h2>

		<p>Guides, stories, and updates from the world of private aviation — what membership actually feels like, where members are flying next, and what's changing in the skies.</p>
	</header>

	<article-grid>
		<ul class='article-list'>

			<?php foreach ($articles as $article) { ?>
				<li class='article'>
					<?php include('modules/article-card/template.php'); ?>
				</li>
			<?php } ?>

		</ul>
	</article-grid>
</articles-intro>
