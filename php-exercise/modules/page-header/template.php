<?php 
	$name = $name ?? "Name of the page is...";
	$content = $content ?? "Here is some content regarding this page";
?>

<page-header>
	<h1><?=$name?></h1>
	<p><?=$content?></p>
</page-header>