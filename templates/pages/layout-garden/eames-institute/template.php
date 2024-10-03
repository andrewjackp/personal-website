<?php
	$dataItems = getData('data/eames-card.json');
?>

<div class="heading-box">
	<h1>Eames Card Grid</h1>
	<p>A card layout inspired by <a href="https://www.eamesinstitute.org/" target="_layout-garden">Instrument's</a> website for the Eames Institute using CSS Grid</p>
</div>

<eames-card>
<ul class="eames-card-list" id="eames-card-list">
	<?php foreach($dataItems as $item) { ?>
	<li class='eames-card-item'>
		
		<article class="eames-card">
			<picture>
				<img src="https://peprojects.dev/images/landscape.jpg" alt="">
			</picture>
		<text-content>
			<span class="quiet-voice"><?=$item["teaser"]?></span>
			<h2 class="loud-voice"><?=$item["title"]?></h2>
			<p class="mid-voice"><?=$item["description"]?></p>
		</text-content>
	</article>
	</li>
	<?php } ?>
</ul>	
</eames-card>
