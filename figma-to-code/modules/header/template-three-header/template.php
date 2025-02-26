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
				<?php foreach($actions as $action):?>
					<?php include("components/$action[buttonType]/template.php"); ?>
				<?php endforeach; ?>
			</li>
		</ul>
	</nav>
</mast-head>