<?php @include('match_data.php'); ?>

<h1>WrestleDocs Match List</h1>

<ul class="match-list">
	<?php foreach($match_data as $match) { ?>

		<li class="match">
			<match-card>
				<picture href='?page=detail&match=<?=$match["id"]?>'>
					<img src="<?=$match["Picture"]?>" alt="match-pic">
				</picture>
				
				<text-content>
					<h2 class="wrestlers">Wrestlers: <?=$match["MatchFixture"]?></h2>
					<h3 class="promotion">Promotion: <?=$match["Promotion"]?></h3>
					<h4 class="rating">Cagematch Rating: <?=$match["Rating"]?></h4>
					<h4 class="rating">Meltzer Rating: <?=$match["WON"]?></h4>
					<h5 class="date">Date: <?=$match["Date"]?></h5>
					<a href='?page=detail&match=<?=$match["id"]?>' class='button'>Full Description</a>
				</text-content>
			</match-card>
		</li>
	<?php } ?>
</ul>