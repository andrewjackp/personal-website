<?php include('../../header.php'); ?>

<style>
	.form {
		border: 1px solid var(--ink-light);
		padding: 10px;
		margin-inline: auto;
		border-radius: 8px;
	}
	.field {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		gap: 8px;
		padding-bottom: 10px;
	}
	.field label {
		font-size: 14px;
	}
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
	$noun = "";
	$verb = "";
	$adjective = "";
	$adverb = "";
	$madlib = "";

	if ( isset($_POST["submitted"]) ) {
		$noun = $_POST["noun"];
		$verb = $_POST["verb"];
		$adjective = $_POST["adjective"];
		$adverb = $_POST["adverb"];
	}

	$madlib = "Do you <em>$verb</em> your $adjective $noun $adverb? That's hilarious!";
?>

<section>
	<inner-column>
		<h1 class="loud-voice">Mad Libs</h1>
		<form class="form" method="POST">
			<div class="field">

				<label for="verb">Verb</label>
				<input type="text" id="v" name="verb" value='<?=$verb?>'>

				<label for="noun">Noun</label>
				<input type="text" id="n" name="noun" value='<?=$noun?>'>
		
				<label for="adverb">Adverb</label>
				<input type="text" id="a" name="adverb" value='<?=$adverb?>'>

				<label for="adjective">Adjective</label>
				<input type="text" id="a" name="adjective" value='<?=$adjective?>'>
			</div>
	
		<button class='site-button' name="submitted">Submit</button>
		</form>

		<?php if ( !empty($madlib) ) { ?>
			<p class="result"><?=$madlib?></p>
		<?php } ?>
	</inner-column>
</section>
</main>


<?php include('../../modules/footer.php'); ?>