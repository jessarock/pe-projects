
<style>

	form {
		max-width: 400px;
		
	}

	.field {
		display: flex;
		flex-direction: column;
	}

	.field label {
		font-size: 14px; 
		margin-bottom: 4px; 	
	}

	button[type="submit"], .field + .field {
		margin-top: 10px; 
	}
	.feedback {
		color: green;
	}

</style>


<?php

$guests = 0; 
$berries = 0; 


if ( isset($_POST["submitted"]) )
{
	echo "<p class='feedback'>submitted it</p>";
}
?>

<form method="POST">

	<p>calculating berries</p>

	<div class="field">
		<label>Guests</label>
		<input type="number" name="guests" value="<?=$guests?>">
	</div>

	<div class="field">
		<label>Berries per Guest</label>
		<input type="number" name="berries" value="<?=$berries?>">
	</div>

	

	<button type="submit" name="submitted">push me</button>



</form>
