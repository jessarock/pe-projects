
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
$bill = 0; 
$tipRate = 0; 

if ( isset($_POST["submitted"]) ) {

	if ( isset($_POST["bill"]) ) {
		$bill = $_POST["bill"];
	}
	if ( isset($_POST["tipRate"]) ) {
		$tipRate = $_POST["tipRate"];
	}
};

$tip = floatval($bill) * (floatval($tipRate) / 100);

$tip = number_format($tip, 2, '.', ',');

$total = floatval($bill) + $tip; 

$total = number_format($total, 2, '.', ',');
?>




<header>
	<h1>Tip Calculator</h1>
</header>

<form method="POST">

	<div class="field">
		<label>How much is the bill? </label>
		<input type="number" name="bill" min=0 step=".01">
	</div>

	<div class="field">
		<label>What tip percentage do you want to leave?</label>
		<input type="number" name="tipRate" min=0 step=".01">
	</div>

	<button type="submit" name="submitted">Submit</button>

</form>

<h2 class="tip-display">The tip is $<?=$tip?></h2>

<h2 class="total-display">Your total is $<?=$total?>.</h2>









