
<style>

	form {
		max-width: 300px;
	}
	.field {
		display: flex; 
		flex-direction: column;
	}
	label {
		padding: 10px 0px;
	}

	button[type="submit"] {
		margin-top: 10px;
	}
	
</style>

<?php


if ( isset($_POST["submitted"]) ) {

	if ( isset($_POST["firstNumber"]) ) {
		$firstNumber = $_POST["firstNumber"];
	}

	if ( isset($_POST["secondNumber"]) ) {
		$secondNumber = $_POST["secondNumber"];
	}
}

$sum = floatval($firstNumber) + floatval($secondNumber);

$difference = floatval($firstNumber) - floatval($secondNumber);

$product = floatval($firstNumber) * floatval($secondNumber);

$quotient = floatval($firstNumber) / floatval($secondNumber);

?>

<header>
	<h1>Simple Math</h1>
</header>	

<form method="POST"> 

	<div class="field"> 
		<label>Enter a number. Any number!</label>
		<input type="number" name="firstNumber" step=".01">
	</div>

	<div class="field"> 
		<label>Enter another number.</label>
		<input type="number" name="secondNumber" step=".01">
	</div>

	<button type="submit" name="submitted">Submit Those Numbers!</button>

</form>

<h2 class="addition"><?=$firstNumber?> + <?=$secondNumber?> = <?=$sum?></h2>

<h2 class="subtraction"><?=$firstNumber?> - <?=$secondNumber?> = <?=$difference?></h2>

<h2 class="multiplication"><?=$firstNumber?> * <?=$secondNumber?> = <?=$product?></h2>

<h2 class="division"><?=$firstNumber?> / <?=$secondNumber?> = <?=$quotient?></h2>


