<?php include('header.php'); ?>
<section class='welcome'>
		<div class="wrestling-ring one">
			<img src="images/wrestling-ring.svg" alt="rassle-ring">
		</div>
				<div class="inner-column">
					<graphic-diptych>
						<picture>
							<img src="images/rectangle.png" alt="$todo">
						</picture>

						<div class="info">
							<h1 class='loud-voice'>Heading level 1</h1>
								<button class='site-button'><a href="#">click here</a></button>
						</div>	
					</graphic-diptych>

						<div class="some-bonus-thing">
						Some bonus thing
						</div>

				</div>
			
			</section>

			<section class='page-section'>

				<h2 class='visually-hidden'>Pick a griddy</h2>

				<div class="inner-column">
					<ul>
						<li class='card-grid'>
							
							<article class='card'>
								<picture>
									<img src="images/	rectangle.png" alt="$todo"	>
								</picture>
	
								<div class="info">
									<h3 class='loud-voice'>Heading here</h3>
								</div>
								
							</article>
	
							<article class='card'>
								<picture>
									<img src="images/	rectangle.png" alt="$todo"	>
								</picture>
	
								<div class="info">
									<h3 class='loud-voice'>Heading here</h3>
								</div>

							</article>

						</li>
					</ul>
				</div>
			</section>

		<section class="media-links">
				<div class="inner-column">
					<div class="wrestling-ring two">
						<img src="images/wrestling-ring.svg" alt="rassle-ring">
					</div>
					<ul class="wrestler-card-grid">
						<li>
							<article class='wrestler-card'>
								<picture>
									<img src="images/akirataue.jpg" alt="pics">
								</picture>

							<div class="info">
								<span class='media-links title'>Akira Taue</span>
								<p class='sub-title'>The most underrated four pillar</p>
								<p class='caption'>Shines in tag matches</p>
								<a class='link' href="#">link here</a>
							</div>
							</article>
					</li>
					<li>
						<article class='wrestler-card'>
							<picture class='poster'>
								<img src="images/kawada.jpg" alt="pics">
							</picture>

							<div class="info">
								<span class='media-links title'>Toshiaki Kawada</span>
								<p class='sub-title'>My favorite pillar</p>
								<p class='caption'>Ultimate dumb jock wrestler</p>
								<a class='link' href="#">link here</a>
							</div>
							</article>
					</li>
					<li>
						<article class='wrestler-card'>
							<picture class='poster'>
								<img src="images/kobashi.jpg" alt="pics">
							</picture>

							<div class="info">
								<span class='media-links title'>Kenta Kobashi</span>
								<p class='sub-title'>The golden child</p>
								<p class='caption'>Peak wrestler performance</p>
								<a class='link' href="#">link here</a>
							</div>
							</article>
					</li>
				</ul>
			</div>
		</section>

		<section class="text-layout">
			<div class="inner-column">
				<?php include('text-layout.php'); ?>
			</div>
		</section>

		<section class="reviews-layout">
			<div class="inner-column">
				<?php include('modules/reviews.php'); ?>
			</div>
		</section>

		<section class="market-cards">
			<div class="inner-column">
				<?php include('modules/market-cards.php'); ?>
			</div>
		</section>

		<section class="groundwork-cards">
			<div class="inner-column">
				<?php include('modules/groundwork-cards.php'); ?>
			</div>
		</section>
		</main>
		<?php include('footer.php'); ?>
	</body>
</html>