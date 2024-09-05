<?php @include('match_data.php'); 
?>

<h1 class='loud-voice'>WrestleDocs Match List</h1>

<ul class="match-list">
	<?php foreach($match_data as $match) { ?>

		<li class="match">
			<match-card>
				<a href='?page=detail&match=<?=$match["id"]?>'>
					<picture>
					<img src="<?=$match["picture"]?>" alt="match-pic">
				</picture>
				</a>

			<text-content>
				<a href='?page=wrestlers&id=<?=$match["wrestlers"][0]?>' class="loud-voice"> <?=$match["wrestlers"][0]?> </a> vs <a href='?page=wrestlers&id=<?=$match["wrestlers"][1]?>' class="loud-voice"> <?=$match["wrestlers"][1]?> </a>
				<h3 class="promotion">Promotion: <?=$match["promotion"]?></h3>
				<h4 class="rating">Cagematch Rating: <?=$match["rating"]?></h4>
				<h4 class="rating">Meltzer Rating: <?=$match["won_rating"]?></h4>
				<h5 class="date">Date: <?=$match["date"]?></h5>
				<a href='?page=detail&match=<?=$match["id"]?>' class='button'>Full Description</a>
				</text-content>
			</match-card>
		</li>
	<?php } ?>

</ul>