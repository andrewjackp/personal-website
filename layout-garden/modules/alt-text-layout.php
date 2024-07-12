<div class='heading-box'>
	<p>
		Here is another text section with a rearranged order. This uses CSS Grid.
	</p>
</div>

<div class="alt-text-grid">
	<alt-text-diptych>
		<div class="text-title">
			<p>a bunch of more stuff</p>
		</div>

		<div class="paragraphs">
			<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Nam consectetur eaque quisquam. Suscipit nisi nemo quis accusantium mollitia ipsam beatae, quae, error saepe explicabo perferendis sunt iste in laboriosam, ea.</p>
		</div>			
	</alt-text-diptych>

	<alt-text-diptych>
		<div class="text-title">
			<p>a bunch of more stuff</p>
		</div>

		<div class="paragraphs">
			<p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Nam consectetur eaque quisquam. Suscipit nisi nemo quis accusantium mollitia ipsam beatae, quae, error saepe explicabo perferendis sunt iste in laboriosam, ea.</p>
		</div>			
	</alt-text-diptych>
</div>					

<style>
	
	.alt-text-grid {
		display: grid;
		padding-bottom: 3em;
	}
	alt-text-diptych {
		display: grid;
		gap: 10px;
		padding-top: 10px;
		padding-bottom: 10px;
		border-bottom: 1px solid black;

		.text-title {
			grid-column: 1;
		}

		.paragraphs {
			grid-column: 4;
			font-size: 14px;
			line-height: 1.28em;
		}

		@media(min-width: 600px){
			.text-title {
				grid-column: 4;
				grid-row: 1;
				padding: 10px;
		}
		.paragraphs {
				grid-column: 1;
				max-width: 80ch;
		}
		}
		
	}

</style>