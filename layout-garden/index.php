<?php include('header.php'); ?>
<section class='welcome'>
		<div class="wrestling-ring one">
			<img src="images/wrestling-ring.svg" alt="rassle-ring">
		</div>
				<div class="inner-column">
					<?php include('modules/welcome.php'); ?>
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

			<section class='page-section'>
				<h2 class='visually-hidden'>Pick a griddy</h2>
				<div class="inner-column">
					<?php include('modules/heading-cards.php'); ?>
				</div>
			</section>

		<section class="media-links">
				<div class="inner-column">
					<?php include('modules/wrestler-card.php'); ?>
			</div>
		</section>

		<section class="text-layout">
			<div class="inner-column">
				<?php include('modules/text-layout.php'); ?>
			</div>
		</section>


		<section class="text-grid-layout">
			<div class="inner-column">
				<?php include('modules/textgrid.php'); ?>
			</div>
		</section>

		<section class="paint-cards-layout">
			<div class="inner-column">
				<?php include('modules/paint-cards.php'); ?>
			</div>
		</section>

		<section class="alt-text-layout-section">
			<div class="inner-column">
				<?php include('modules/alt-text-layout.php'); ?>
			</div>
		</section>
		</main>
		<?php include('footer.php'); ?>
	</body>
</html>