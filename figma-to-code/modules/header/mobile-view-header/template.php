<?php
	$actions = $props['actions'] ?? [];
	$mobileHeaderStyle = $props['mobileHeaderStyle'] ?? [];
?>

<mast-head>
	<a href="javascript:window.history.back()">
		<picture>
			<image src="images/temp2-header-images/t2-logo.svg">
		</picture>
	</a>

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