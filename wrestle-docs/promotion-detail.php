<?php 
	
	$id = $_GET["id"];

	$wrestlers_data = getData('data/wrestlers.json');

	$promotion_data = getData('data/promotions.json');

	$promotion = getPromotionById($promotion_data, $id);

?>

<?php if ( isset($promotion) ) { ?>

	<h1 class='loud-voice'><?=$promotion["promotion_name"]?></h1>
	
	<?php foreach($promotion["roster"] as $id) { 

		$wrestler_roster = getWrestlerById($wrestlers_data, $id);

	?> 

		<a href="?page=wrestler-detail&id=<?=$wrestler_roster["id"]?>">
			<?=$wrestler_roster["name"]?>
		</a>

	<?php } ?>
		

<?php } else { ?>

	<h1>No match found</h1>

<?php } ?>