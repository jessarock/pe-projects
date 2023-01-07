<?php

function inventoryGenerator($vendor, $price, $type, $par, $onHand) {
	$inventory = [
		"name" => $name,
		"vendor" => $vendor,
		"price" => $price, 
		"type" => $type, 
		"par" => $par, 
		"on hand" => $onHand,
	];
	return $inventory;
}

$greenHat = inventoryGenerator("Green Hat", "New Columbia", 25.83, "gin", 1, 1);
$civic = inventoryGenerator("Civic", "Republic Restoratives", 19.50, "vodka", 6, .4);
$ango = inventoryGenerator("Angostura", "Breakthru", 20.86, "bitters", 3, 2.3);
$monkeyShoulder = inventoryGenerator("Monkey Shoulder", "Breakthru", 27.36, "scotch", 3, 1.1);
$michters = inventoryGenerator("Michter's", "Dops", 35.33, "bourbon", 2, 0);
$mellowGold = inventoryGenerator("Mellow Gold", "Madidus", 24, "rum", 4, 2.9);
$americano = inventoryGenerator("St. George Americano", "RNDC", 23.99, "apertif", 1, 1);
$rittenhouse = inventoryGenerator("Rittenhouse", "Southern", 22.49, "rye", 12, .4);


$inventory = [$greenHat, $civic, $ango, $monkeyShoulder, $michters, $mellowGold, $americano, $rittenhouse];

?>

<ul inventory-list>

<?php foreach($inventory as $i) { ?>
	<li>	
		<inventory-card>
			<p class="vendor"><?=$i["name"]?></p>

			<p class="vendor"><?=$i["vendor"]?></p>

			<p class="price"><?=$i["price"]?></p>

			<p class="type"><?=$i["type"]?></p>

			<p class="par"><?=$i["par"]?></p>

			<p class="on-hand"><?=$i["on hand"]?></p>
		</inventory-card>
	</li>

<?php } ?>
</ul>



<!---Do I need to order? 
//if $onHand >= $par then no order 
//if $onHand < $par then order -->
