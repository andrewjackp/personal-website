<?php 
	
	$wrestlers = "";
	$promotion = "";
	$match_date = date("m.d.y");
	$hasWrestlers = false;
	$hasPromotion = false;
	$hasMatch_date = false;

	$wrestlersError = false;
	$promotionError = false;
	
	if ( isset($_POST["add"]) ) {

		if ( isset($_POST["wrestlers"]) ) {
			$wrestlers = $_POST["wrestlers"];

			if ( strlen($wrestlers) > 0) {
				$hasWrestlers = true;
			} else {
				$wrestlersError = "Please add wrestlers";
			}
		}

		if ( isset($_POST["add"]) ) {

			if ( isset($_POST["promotion"]) ) {
				$promotion = $_POST["promotion"];

				if ( strlen($promotion) > 0) {
					$hasPromotion = true;
				} else {
					$promotionError = "please add promotion";
				}
			}	
		}

		if ( isset($_POST["add"]) ) {

			if ( isset($_POST["match_date"]) ) {
				$match_date = $_POST["match_date"];

				if ( $match_date > 0) {
					$hasMatch_date = true;
				}	
			}	
		}

		if ($hasWrestlers && $hasPromotion && $hasMatch_date) {
			$wrestling_match = [
				$wrestlers => $_POST["wrestlers"],
				$promotion => $_POST["promotion"],
				$match_date => $_POST["match_date"],
			];

			var_dump($wrestling_match);

		} else {
			echo "NOOOO";
		}
	}
?>

<h1>Create</h1>

<form method="POST">
	<field>
		<label>Wrestlers</label>
		<input type="text" name="wrestlers" value='<?=$wrestlers?>'>
		<?php if ($wrestlersError) { ?>
			<p class="error-msg"><?=$wrestlersError?></p>
	<?php } ?>
	</field>
	<field>
		<label>Promotion</label>
		<input type="text" name="promotion" value='<?=$promotion?>'>
		<?php if ($promotionError) { ?>
			<p class="error-msg"><?=$promotionError?></p>
	<?php } ?>
	</field>
	<field>
		<label>Date</label>
		<input type="date" name="match_date" min="1950-01-01" max="2025-08-31" value='<?=$match_date?>'>
	</field>

	<button type='submit' name='add'>
		Add match
	</button>
</form>