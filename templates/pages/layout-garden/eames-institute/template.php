<?php
	$dataItems = getData('data/eames-card.json');
?>



<div class="heading-box">
	<h1>Eames Card Grid</h1>
	<p>A card layout inspired by <a href="https://www.eamesinstitute.org/" target="_layout-garden">Instrument's</a> website for the Eames Institute using CSS Grid</p>
</div>

<eames-card>

<ul class="eames-card-list" id="eames-card-list">
	<li class='eames-card-item'>
		<article class="eames-card">
			<picture>
				<img src="https://peprojects.dev/images/landscape.jpg" alt="">
			</picture>
		<text-content>
			<span class="quiet-voice">teaser</span>
			<h2 class="loud-voice">title</h2>
			<p class="mid-voice">desc</p>
		</text-content>
	</article>
	</li>
</ul>	
</eames-card>
