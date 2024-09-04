<?php @include('match_data.php');  
	
	$found = null;
	$id = "";

	function getData($path) {
		include($path);
	}

	$wrestler_list = file_get_contents('wrestlers.json');

	$wrestlers = json_decode($wrestler_list, true);

	foreach($wrestlers as $wrestler) {
			if($wrestler["id"] == $id){
				echo $id;
		}
	}
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
				<h2 class="loud-voice">
					<?=$match["wrestlers"][0]?> vs <?=$match["wrestlers"][1]?> </h2>
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