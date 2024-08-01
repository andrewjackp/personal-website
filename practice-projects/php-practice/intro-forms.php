<link rel="stylesheet" href="/css/style.css">
<style>
	form {
		border: 0.5px solid var(--ink-light);
		padding: 10px;
		margin-inline: auto;
	}
	.field {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
	}
	.field label {
		font-size: 14px;
		margin-bottom: 4px;
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
	input[type="checkbox"]:checked {
    border-color: red;
    background-color:red;
}
</style>

<section>
	<inner-column>
		<h1 class="loud-voice">Let's see some wrestlers in the NJPW G1 this year</h1>

<form method="POST">
	<div class="field">
		<label>Wrestlers</label>
		<div class="shingo">
			<input type="checkbox" name="wrestler" value="shingo">
			<label for="shingo">Shingo Takagi</label>
		</div>
		<div class="jake-lee">
			<input type="checkbox" name="wrestler" value="jake lee">
			<label for="jake-lee">Jake Lee</label>
		</div>
		<div class="take">
			<input type="checkbox" name="wrestler" value="konuske takeshita">
			<label for="take">Konusuke Takeshita</label>
		</div>
		<div class="yuya">
			<input type="checkbox" name="wrestler" value="yuya uemura">
			<label for="yuya">Yuya Uemura</label>
		</div>
		<div class="naito">
			<input type="checkbox" name="wrestler" value="tetsuya naito">
			<label for="naito">Tetsuya Naito</label>
		</div>
		<div class="kidd">
			<input type="checkbox" name="wrestler" value="gabe kidd">
			<label for="kidd">Gabe Kidd</label>
		</div>
	</div>

	<div class="field">
		<label>Status</label>

		<div class="washed">
			<input type="checkbox" name="status" value="washed">
			<label for="washed">Washed</label>
		</div>
		<div class="prime">
			<input type="checkbox" name="status" value="in his prime">
			<label for="prime">Prime</label>
		</div>
		
	</div>

	<button type="submit" name="submitted">Submit</button>

	<?php 
	
	$wrestler = "";
	$status = "";
	$statement = "";
	
	if ( isset($_POST["submitted"]) ) {

		if ( isset($_POST["wrestler"])) {
			$wrestler = $_POST["wrestler"];
		}
		
		if (isset ($_POST["status"])) {
			$status = $_POST["status"];
		};
		
		// $total = floatval($toys) * floatval($dogs);

		echo  $statement = "<p class='result'>$wrestler is $status</p>";

	};
?>

	<?php

		if ($status == "washed") {
			echo "<style>
				form {
					background: #e65451;
					color: white;
				}
			</style>";
		}
		elseif ($status == "in his prime") {
			echo "<style>
				form {
					background: beige;
				}
			</style>";
		}
	 ?>
</form>
	</inner-column>
</section>

