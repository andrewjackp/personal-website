<?php 
	
	$id = $_GET["id"];

	$wrestlers_data = getData('wrestlers.json');

	$wrestler = getWrestlerById($wrestlers_data, $id);
?>

<?php if ( isset($wrestler) ) { ?>

	<h1 class='loud-voice'><?=$wrestler["name"]?></h1>
	
<?php foreach($wrestler["promotions"] as $promotion) { ?> 
	<a href="?page=promotion&id=<?=$promotion?>">
		<?=$promotion?>
	</a>
<?php } ?>
	
	<p class='description'>A classic match between some all timers.</p>

<?php } else { ?>

	<h1>No match found</h1>

<?php } ?>

