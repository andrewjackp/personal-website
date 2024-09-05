<h1>Wrestlers</h1>

<?php 
	
	$wrestler_list = file_get_contents('wrestlers.json');

	$wrestlers = json_decode($wrestler_list, true);

	if( isset($_GET["id"]) ) {
		$this_wrestler_id = $_GET["id"];
	};

	echo $this_wrestler_id; // 0

	foreach($wrestlers as $wrestler) {
			if($wrestler["id"] == $this_wrestler_id ){
				 $this_wrestler_id = $wrestler;
		}
	}
?>

<?php if ( isset($wrestler) ) { ?>

	<h1 class='loud-voice'><?=$wrestler["id"]?></h1>
	
	<h2><?=$wrestler["promotion"]?></h2>
	
	<p class='description'>A classic match between some all timers.</p>

<?php } else { ?>

	<h1>No match found</h1>

<?php } ?>

