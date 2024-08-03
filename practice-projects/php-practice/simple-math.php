<style>
	.result {
		line-height: 1.28em;
	}
	.loud-voice {
		padding-bottom: 10px;
	}
	input {
		max-width: 100px;
	}
</style>

<?php include('../../header.php'); ?>

<?php 
	$firstNum = 0;
	$secNum = 0;
	$added = 0;
	$subtracted = 0;
	$multiplied = 0;
	$divided = 0;
	$result = 0;

	if ( isset($_POST["submitted"]) ) {
		$firstNum = $_POST["firstNum"];
		$secNum = $_POST["secNum"];

		$added = floatval($firstNum) + floatval($secNum);
		$subtracted = floatval($firstNum) - floatval($secNum);
		$multiplied = floatval($firstNum) * floatval($secNum);
		$divided = floatval($firstNum) / floatval($secNum);
	}

	$result = "Added together: $added <br>" . "Subtracted: $subtracted <br>" . "Multiplied: $multiplied <br>" . "Divided: $divided <br>";
?>

<section>
	<inner-column>
		<h1 class="loud-voice">Simple Math</h1>
		<form method="POST" class="form">
			<div class="field">
				<input type="number" name="firstNum" min=0 value='<?=$firstNum?>'>
			</div>

			<div class="field">
				<input type="number" name="secNum" min=0 value='<?=$secNum?>'>
			</div>
			<button name="submitted">Submit</button>
		</form>

			<?php if ( !empty($result) ) { ?>
			<p class="result"><?=$result?></p>
		<?php } ?>

	</inner-column>
</section>

<?php include('../../modules/footer.php'); ?>