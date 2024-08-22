<?php 

	if ( isset($_POST["add"]) ) {
		echo "added";
	}

?>

<h1>Create</h1>

<form method="POST">
	<field>
		<label>Wrestlers</label>
		<input type="text">
	</field>
	<field>
		<label>Promotion</label>
		<input type="text">
	</field>
	<field>
		<label>Date</label>
		<input type="date">
	</field>

	<button type='submit' name='add'>
		Add match
	</button>
</form>