<?php
	$footerColor = $props['footerColor'] ?? "default";
?>
	<site-map>

		<nav class='site-menu'>
			<h3 class='strong-voice'>Product</h3>
			<ul>
				<li><a href='#'>Diam orci</a></li>
				<li><a href='#'>Mi feugiat</a></li>
				<li><a href='#'>Netus fermentum</a></li>
				<li><a href='#'>Suspendisse viverra</a></li>
				<li><a href='#'>Id dolor</a></li>
				<li><a href='#'>Erat mattis</a></li>
			</ul>
		</nav>

		<nav class='x-menu'>
			<h3 class='strong-voice'>Information</h3>

			<ul>
				<li><a href='#'>Nibh</a></li>
				<li><a href='#'>Egestas</a></li>
				<li><a href='#'>Dictum</a></li>
			</ul>
		</nav>

		<nav class='x-menu'>
			<h3 class='strong-voice'>Company</h3>
				<ul>
					<li><a href='#'>Id maecenas</a></li>
					<li><a href='#'>Id orci</a></li>
					<li><a href='#'>Magna ultricies</a></li>
					<li><a href='#'>Quis Risis</a></li>
				</ul>
		</nav>

		<nav class='x-menu'>
			<h3 class='strong-voice'>Subscribe</h3>
				<email-content>
				<?php
					include('components/email-form/template.php');
				?>
				</email-content>
					
					<p class='soft-voice'>Gravida sed justo, justo, id est et. Amet tristique convallis sed porttitor nullam eu ut. Duis et odio aliquam bibendum. Metus et lectus id viverra fringilla magna morbi.
					</p>
		</nav>

	</site-map>

<site-disclaimer>
	<picture>
		<image src="images/footer-logo.svg"></image>
	</picture>
	<ul>
		<li><a href="#">Terms</a></li>
		<li><a href="#">Privacy</a></li>
		<li><a href="#">Cookies</a></li>
	</ul>
		<ul>
		<li><a href="#"><picture><image src="images/linkedin.svg"></image></picture></a></li>
		<li><a href="#"><picture><image src="images/facebook.svg"></image></picture></a></li>
		<li><a href="#"><picture><image src="images/social-media.svg"></image></picture></a></li>
	</ul>
</site-disclaimer>
