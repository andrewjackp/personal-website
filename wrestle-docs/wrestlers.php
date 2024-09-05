<h1>Wrestlers</h1>

<?php 
	
	$wrestler_list = file_get_contents('wrestlers.json');

	$wrestlers = json_decode($wrestler_list, true);

	if( isset($_GET["id"]) ) {
		$id = $_GET["id"];
	};

	echo $id; // 0

	$found = null;

	foreach($wrestlers as $wrestler) {
			if($wrestler["id"] == $id ){
				 $found == $wrestler;
		}
	}
?>

<?php if ( isset($wrestler) ) { ?>

	<h1 class='loud-voice'><?=$wrestler["name"]?></h1>
	
	<h2><?=$wrestler["promotion"][0]?>, <?=$wrestler["promotion"][1]?></h2>
	
	<p class='description'>A classic match between some all timers.</p>

<?php } else { ?>

	<h1>No match found</h1>

<?php } ?>

