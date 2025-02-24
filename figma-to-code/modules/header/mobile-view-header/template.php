<?php
	$actions = $props['actions'] ?? [];
	$mobileHeaderStyle = $props['mobileHeaderStyle'] ?? [];
?>

<mast-head>
	<a href="?page=template-one">
	<picture>
		<image src="images/header.svg">
	</picture>
	</a>

	
	<nav class='site-menu'>
		<ul>
			<li>
				<a href='?page=template-one'>Home</a>
			</li>
			<li>
				<a href='?page=template-two'>Updates</a>
			</li>
			<li>
				<a href='?page=template-three'>Services</a>
			</li>
			<li>
				<a href="#">Features</a>
			</li>
				<li>
				<a href="#">About Us</a>
			</li>
		</ul>
	</nav>

	<nav class='user-menu'>
		<ul>
			<li>
				<a id="#logo" href='#'>
					<picture>
						<img src="images/globe_en.svg" alt="">
					</picture>
				</a>
			</li>
				<li>
				<?php foreach($actions as $action):?>
					<?php include("components/$action[buttonType]/template.php"); ?>
				<?php endforeach; ?>
			</li>
		</ul>
	</nav>

	<nav class="mobile-view <?=$mobileHeaderStyle?>">
		<a href="javascript:window.history.back()" class='link'>
			<div class="icon">
				<svg viewBox='0 0 10 10'>
					<circle cx='5' cy='5' r='5' />
				</svg>
			</div>
		</a>
	</nav>

</mast-head>