<?php
	$promotion_data = getData('data/promotions.json'); 
?>

<?php foreach($promotion_data as $promotion) { ?>
	<ul class="promotions">
		<li class="match">
			<match-card>
			<text-content>
				<h3 class="promotion">Promotion: <?=$promotion["promotion_name"]?></h3>
			</text-content>
			</match-card>
		</li>
	
<?php } ?>

</ul>