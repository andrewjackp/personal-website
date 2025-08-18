<?php
	$footerColor = $props['footerColor'] ?? "default";
?>
	<site-map>

		<nav class='site-menu'>
			<h3 class='strong-voice'>Product</h3>
			<ul>
				<li><a href='#'>Enterprise Brand Systems</a></li>
				<li><a href='#'>Integrated Marketing Solutions</a></li>
				<li><a href='#'>Customer Experience Platforms</a></li>
				<li><a href='#'>Digital Transformation Services</a></li>
				<li><a href='#'>Data-Driven Strategy</a></li>
			</ul>
		</nav>

		<nav class='x-menu'>
			<h3 class='strong-voice'>Information</h3>

			<ul>
				<li><a href='#'>About Our Company</a></li>
				<li><a href='#'>Leadership & Governance</a></li>
				<li><a href='#'>Corporate Responsibility</a></li>
			</ul>
		</nav>

		<nav class='x-menu'>
			<h3 class='strong-voice'>Company</h3>
				<ul>
					<li><a href='#'>About Us</a></li>
  					<li><a href='#'>Leadership Team</a></li>
  					<li><a href='#'>Careers</a></li>
  					<li><a href='#'>Newsroom</a></li>
  					<li><a href='#'>Investor Relations</a></li>
  					<li><a href='#'>Sustainability & Impact</a></li>
				</ul>
		</nav>

		<nav class='x-menu'>
			<h3 class='strong-voice'>Subscribe</h3>
				<email-content>
				<?php
					include('components/email-form/template.php');
				?>
				</email-content>
					
					<p class='soft-voice'>Join our community to receive insights, updates, and resources designed to help your business grow. From industry trends to strategic best practices, we’ll deliver the knowledge you need—straight to your inbox.
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
