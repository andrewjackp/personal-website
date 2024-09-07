<?php include('match_data.php'); 
?>
<?php $wrestlers_data = getData('wrestlers.json'); ?>

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

				<?php $count = 0; 
						$wrestlers_total = count($match["wrestlers"]);
				?>
				<?php foreach($match["wrestlers"] as $id) {

					$count++;

					$wrestler = getWrestlerById($wrestlers_data, $id);

					?>

					<a href='?page=wrestler&id=<?=$wrestler["id"]?>' class="loud-voice"> <?=$wrestler["name"]?> </a> 

					<?php if($count < $wrestlers_total) {
						echo "vs";
					} ?>

				<?php } ?>
				

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