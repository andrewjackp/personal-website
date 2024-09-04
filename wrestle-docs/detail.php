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

	<h1 class='loud-voice match-detail'><?=$bout["match_type"]?></h1>
	
	<picture class='image'>
		<img src="<?=$bout["picture"]?>" alt="$todo">
	</picture>
	
	<p class='description'>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. 	Consectetur fuga asperiores quasi repudiandae, dolorum 	cupiditate aliquid ipsa perspiciatis, consequuntur praesentium. 	At vitae libero fugiat, magnam ex atque inventore eius. Rerum.</p>

<?php } else { ?>

	<h1>No match found</h1>

<?php } ?>