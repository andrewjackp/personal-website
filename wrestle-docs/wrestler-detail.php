<?php 
	
	$id = $_GET["id"];

	$wrestlers_data = getData('data/wrestlers.json');

	$wrestler = getWrestlerById($wrestlers_data, $id);

	$promotion_data = getData('data/promotions.json');
?>

<?php if ( isset($wrestler) ) { ?>

	<h1 class='loud-voice'><?=$wrestler["name"]?></h1>
	
<?php foreach($wrestler["promotions"] as $id) { 

		$promotion = getPromotionById($promotion_data, $id);

	?> 

	<a href="?page=promotion-detail&id=<?=$promotion["id"]?>">
		<?=$promotion["promotion_name"]?>
	</a>
<?php } ?>
	

<?php } else { ?>

	<h1>No match found</h1>

<?php } ?>

