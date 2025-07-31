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
				<a href='?page=template-one'>Template One</a>
			</li>
			<li>
				<a href='?page=template-two'>Template Two</a>
			</li>
			<li>
				<a href='?page=template-three'>Template Three</a>
			</li>
			<!-- <li>
				<a href="#">Features</a>
			</li>
				<li>
				<a href="#">About Us</a>
			</li> -->
		</ul>
	</nav>

	<nav class='user-menu'>
		<ul class='header-btn-container'>
			<li>
				<?php foreach($actions as $action):?>
					<?php include("components/$action[buttonType]/template.php"); ?>
				<?php endforeach; ?>
			</li>
		</ul>
	</nav>

	<nav class="mobile-view <?=$mobileHeaderStyle?>">
		<a href="?page=mobile-view" class='link'>
			<div class="icon">
				<svg viewBox='0 0 10 10'>
					<circle cx='5' cy='5' r='5' />
				</svg>
			</div>
		</a>
	</nav>
</mast-head>