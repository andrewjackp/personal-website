<?php include('../../header.php'); ?>

<style>
	button[type="submit"], .field + .field {
		margin-top: 10px;
	}
</style>

<?php
	$char = "";
	$message = "";
	$count = strlen($char);

	if ( isset($_POST["submitted"]) ) {
			$char = $_POST["char"];
		}
		
		echo "<p>$count</p>";
 ?>

 <section>
	<inner-column>
		<form action="POST" class="form">
			<div class="field">
			<input type="text" name="char" value='<?=$char?>'>
			<label for="char">Enter a word</label>
			</div>
		<button class='site-button' type='submit' name='submitted'>Submit</button>
		</form>
	</inner-column>
</section>

<?php include('../../modules/footer.php'); ?>