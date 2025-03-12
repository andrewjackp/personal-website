<?php 
	$links = [
		[
			"slug" => "home",
			"label" => "Home"
		],
		[
			"slug" => "drums",
			"label" => "Drums"
		]
	];
?>


<ul>
	<?php foreach ($links as $link) {

		$active = "";

		if ($link['slug'] === getCurrentPageSlug()) {
			$active = "active";
		}

	 ?>
		<li>
			<a class="<?=$active?>" href="?page=<?=$link['slug']?>">
				<?=$link["label"]?>	
			</a>
		</li>
	<?php } ?>
</ul>