<?php 
	$cardData = [1, 2, 3, 4, 5, 6];
	$cardStyle = $cardStyle ?? "default";
?>

<ul class="card-list <?=$cardStyle?>" >
	<?php foreach($cardData as $card) { ?> 
		<li>
			<article class="card">
				<h1>Heading</h1>
				<p>Placeholder text</p>
			</article>
		</li>
	<?php } ?>
</ul>
