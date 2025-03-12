<?php
	$title = $project["title"];
	$slug = $project["slug"];
	$url = $project["url"];
	$teaser = $project["teaser"];
?>

<project-card>
	<h3><?=$title?></h3>

	<p><?=$teaser?></p>

	<a href="<?=$url?>" target="_blank">Visit</a>
</project-card>