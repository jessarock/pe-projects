
<?php 
	if ( isset($_POST["add"]) ) 
?>
<h1>Create</h1>

<form method="POST"> 
	<field> 
		<label>Name:</label>
		<input type="text">
	</field>

	<field> 
		<label>Liquor:</label>
		<input type="text">
	</field>

	<field> 
		<label>Glassware:</label>
		<input type="text">
	</field>

	<button type="submit" name="add">
		add cocktail
	</button>
</form>