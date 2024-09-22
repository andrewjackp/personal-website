<?php
	$title = $project["title"];
	$url = $project["url"];
	$intro = $intro ?? "Here are my featured projects";
	$heading = $heading ?? "Heading for the page";
?>

<project-card>
	<figure>
		<img src="images/wrestling-ring.svg" alt="">
	</figure>
	<h3><?=$title?></h3>

	<p>Teaser here</p>

	<a href="<?=$url?>">Visit</a>
</project-card>