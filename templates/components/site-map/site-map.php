<?php 
	$links = [
		[
			"slug" => "home",
			"label" => "Home"
		],
		[
			"slug" => "layout-garden",
			"label" => "Layout Garden"
		],
		[
			"slug" => "resume",
			"label" => "Resume"
		],
		[
			"slug" => "drums",
			"label" => "Drums"
		],
		[
			"slug" => "style-guide",
			"label" => "Style Guide"
		],
		[
			"slug" => "theme-challenge",
			"label" => "Theme Challenge"
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