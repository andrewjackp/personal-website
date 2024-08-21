<?php include('match_data.php'); ?>

<?php 
	if( isset($_GET["match"]) ) {
		$this_match_id = $_GET["match"];
	};

	echo $this_match_id; // 0

	foreach($match_data as $match){
		if( $this_match_id == $match["id"] ) {
			$bout = $match;
		}
	}
?>

<?php if ( isset($bout) ) { ?>

	<h1><?=$bout["MatchFixture"]?></h1>
	
	<picture>
		<img src="<?=$bout["Picture"]?>" alt="$todo">
	</picture>
	
	<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. 	Consectetur fuga asperiores quasi repudiandae, dolorum 	cupiditate aliquid ipsa perspiciatis, consequuntur praesentium. 	At vitae libero fugiat, magnam ex atque inventore eius. Rerum.</p>

<?php } else { ?>

	<h1>No match found</h1>

<?php } ?>

