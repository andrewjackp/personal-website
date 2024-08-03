<?php include('../../header.php'); ?>

<style>
	button[type="submit"], .field + .field {
		margin-top: 10px;
	}
	.result {
		color: var(--ink);
		font-weight: 400;
		margin-top: 1em;
	}
	.loud-voice {
		padding-bottom: 10px;
	}

	button {
		padding-top: 10px;
	}

</style>

<?php
	$word = "";
	$count = 0;
	$message = "";

	if ( isset($_POST["submitted"]) ) {
		$word = $_POST["word"];
		$count = strlen($word);
	}

	$message = "Your chosen word: $word, has a count of $count characters";
?>

<section>
	<inner-column>
		<h1 class="loud-voice">Character Count</h1>
		<form class="form" method="POST">
			<div class="field">

				<label for="word">Enter word</label>
				<input type="text" id="v" name="word" value='<?=$word?>'>

			</div>
	
		<button class='site-button' name="submitted">Submit</button>
		</form>

		<?php if ( !empty($message) ) { ?>
			<p class="result"><?=$message?></p>
		<?php } ?>
	</inner-column>
</section>
</main>


<?php include('../../modules/footer.php'); ?>