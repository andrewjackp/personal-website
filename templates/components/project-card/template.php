<?php
	$title = $project["title"];
	$slug = $project["slug"];
?>

<project-card>
	<figure>
		<img src="images/wrestling-ring.svg" alt="">
	</figure>
	<h3><?=$title?></h3>

	<p>Teaser here</p>

	<a href="?page=project&slug=<?=$slug?>">Visit</a>
</project-card>