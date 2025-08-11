<?php
	$footerColor = $props['footerColor'] ?? "default";
?>
	<site-map>

		<nav class='site-menu'>
			<h3 class='strong-voice'>Product</h3>
			<ul>
				<li><a href='#'>Thing 1</a></li>
				<li><a href='#'>Thing 2</a></li>
				<li><a href='#'>Thing 3</a></li>
				<li><a href='#'>Thing 4</a></li>
				<li><a href='#'>Thing 5</a></li>
				<li><a href='#'>Thing 6</a></li>
			</ul>
		</nav>

		<nav class='x-menu'>
			<h3 class='strong-voice'>Information</h3>

			<ul>
				<li><a href='#'>Thing 1</a></li>
				<li><a href='#'>Thing 2</a></li>
				<li><a href='#'>Thing 3</a></li>
			</ul>
		</nav>

		<nav class='x-menu'>
			<h3 class='strong-voice'>Company</h3>
				<ul>
					<li><a href='#'>Thing 1</a></li>
					<li><a href='#'>Thing 2</a></li>
					<li><a href='#'>Thing 3</a></li>
					<li><a href='#'>Thing 4</a></li>
				</ul>
		</nav>

		<nav class='x-menu'>
			<h3 class='strong-voice'>Subscribe</h3>
				<email-content>
				<?php
					include('components/email-form/template.php');
				?>
				</email-content>
					
					<p class='quiet-voice'>Gravida sed justo, justo, id est et. Amet tristique convallis sed porttitor nullam eu ut. Duis et odio aliquam bibendum. Metus et lectus id viverra fringilla magna morbi.
					</p>
		</nav>

	</site-map>

<site-disclaimer>
	<picture>
		<image src="images/temp2-footer-images/blue-logo.svg"></image>
	</picture>
	<ul>
		<li><a href="#">Terms</a></li>
		<li><a href="#">Privacy</a></li>
		<li><a href="#">Cookies</a></li>
	</ul>
		<ul>
		<li><a href="#"><picture><image src="images/temp2-footer-images/linkedin.svg"></image></picture></a></li>
		<li><a href="#"><picture><image src="images/temp2-footer-images/facebook.svg"></image></picture></a></li>
		<li><a href="#"><picture><image src="images/temp2-footer-images/socials.svg"></image></picture></a></li>
	</ul>
</site-disclaimer>
