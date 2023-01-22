
<?php 

	$name = ""; 
	$liquor = "";
	$glassware = ""; 
	$hasName = false; 
	$nameError = false; 
	$hasLiquor = false; 
	$liquorError = false;
	$hasGlassware = false; 
	$glasswareError = false; 
	


	if ( isset($_POST["add"]) ) {

		if ( isset($_POST["name"]) ) {
			$name = $_POST["name"];
			if ( strlen($name) > 0) {
				$hasName = true; 
			} else {
				$nameError = "Please add a cocktail.";
			}
		}
	
		if ( isset($_POST["liquor"]) ) {
			$liquor = $_POST["liquor"]; 
			if ( strlen($liquor) > 0) {
				$hasLiquor = true; 
			} else {
				$liquorError = "Please add a liquor.";
			}
		}

		if ( isset($_POST["glassware"]) ) {
			$glassware = $_POST["glassware"]; 
			if ( strlen($glassware) > 0) {
				$hasGlassware = true; 
			} else {
				$glasswareError = "Please add glassware.";
			}
		}
	
	}
?>
<h1>Create</h1>

<form method="POST"> 
	<field> 
		<label>Name:</label>
		<input name="name" type="text" value="<?=$name?>">
		<?php if ($nameError) { ?>
			<p class="error"><?=$nameError?></p>
		<?php } ?>
	</field>

	<field> 
		<label>Liquor:</label>
		<input name="liquor" type="text" value="<?=$liquor?>">
		<?php if ($liquorError) { ?>
			<p class="error"><?=$liquorError?></p>
		<?php } ?>
	</field>

	<field> 
		<label>Glassware:</label>
		<input name="glassware" type="text" value="<?=$glassware?>">
		<?php if ($glasswareError) { ?>
			<p class="error"><?=$glasswareError?></p>
		<?php } ?>
	</field>

	<button type="submit" name="add">
		add cocktail
	</button>
</form>