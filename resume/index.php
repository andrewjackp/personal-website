
<?php
	$resume = [
    "positions" => [
        [
            "type" => "Freelance",
            "years" => "2021 to present",
            "tasks" => "Building efficient, responsive, visually relaxing websites",
            "tools" => "HTML, CSS, JavaScript, PHP"
        ],
        [
            "type" => "Yay For You",
            "years" => "2021 to 2024",
            "tasks" => "Worked with the team on a Shopify website.",
            "tools" => "HTML, CSS, JavaScript, Shopify"
        ],
        [
            "type" => "Court Avenue",
            "years" => "2022",
            "tasks" => "Worked on Dell: Day in The Life. A web app using Vue that used a scroll-based animation to give the perspective of a day in the life of a Dell client.",
            "tools" => "HTML, CSS, JavaScript, WordPress, Shopify"
        ],
    ],
   "education" => [
   	[
   		"institution" => "Pasadena City College",
         "studies" => "Communications"
   	],
   	[
   		"institution" => "Perpetual Education",
         "studies" => "Design For The Web"
   	]
   ] 
];
?>

<?php foreach( $resume["positions"] as $position ) { ?>

	<div class='info'>
		<h2 class='mid-voice'><?=$position["type"]?></h2>
		<p class='ink-voice'><?=$position["years"]?></p>
		<p class='soft-voice'><?=$position["tasks"]?></p>
		<p class='soft-voice'><?=$position["tools"]?></p>
	</div>

<?php } ?>

<?php foreach( $resume["education"] as $schooling ) { ?>

	<div class='info'>
		<h2 class='mid-voice'><?=$schooling["institution"]?></h2>
		<p class='ink-voice'><?=$schooling["studies"]?></p>
	</div>

<?php } ?>