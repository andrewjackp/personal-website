<?php 
	
	$id = $_GET["id"];

	$wrestlers_data = getData('data/wrestlers.json');

	$wrestler = getWrestlerById($wrestlers_data, $id);
?>

<?php if ( isset($wrestler) ) { ?>

	<h1 class='loud-voice'><?=$wrestler["name"]?></h1>
	
<?php foreach($wrestler["promotions"] as $promotion) { ?> 
	<a href="?page=promotion&id=<?=$promotion?>">
		<?=$promotion?>
	</a>
<?php } ?>
	

<?php } else { ?>

	<h1>No match found</h1>

<?php } ?>

