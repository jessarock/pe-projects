
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

$onHand = 0; 
$par = 0;
	
if ( isset($_POST["submitted"]) ) {
	
	if ( isset($_POST["onHand"]) ) {
		$onHand = $_POST["onHand"]; 
	}
	if ( isset($_POST["par"]) ) {
		$par =$_POST["par"];
	}
	if ( isset($_POST["productName"]) ) {
		$productName =$_POST["productName"];
	}
}

$order = floatval($par) - floatval($onHand);

?>

<header> 
	<h1>Inventory Generator</h1>
</header>

<form method="POST">

	<div class="field">
		
		<label>Name of Product</label>
		
		<input type="text" name="productName"> 
		
	</div>
	
	
	<div class="field">
		
			<label>Current Amount Product On Hand</label>
	
			<input type="number" name="onHand" min=0> 
		
	</div>
	
	<div class="field">
	
			<label>What is the Par?</label>
	
			<input type="number" name="par" min=0>
	 	
	</div>

	<button type="submit" name="submitted">Submit</button>

</form>

<h2>Please order <?=$order?> <?=$productName?>.</h2>



