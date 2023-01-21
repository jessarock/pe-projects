<?php include("cocktail-data.php"); ?>


<?php


	if ( isset($_GET["cocktail"]) ) {
		$this_cocktail_id = $_GET["cocktail"];
	}

	foreach ($cocktail_data as $cocktail) {
		if ($this_cocktail_id == $cocktail["id"] ) {
			$detail = $cocktail;
		}
	}

?>

<?php if ( isset($detail) ) { ?>

<h1><?=$detail["name"]?></h1>

<picture>
	<img src="https://peprojects.dev/images/square.jpg">
</picture>

<p>some things about a yummy drink</p>

<?php } else { ?>

<h1>No cocktail found.</h1>

<?php } ?>