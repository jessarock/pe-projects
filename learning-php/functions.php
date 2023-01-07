




<?php

	function monsterGenerator($id, $name, $age, $favoriteFood) {
		$monster = [
			"id" => $id,
			"name" => $name,
			"age" => $age,
			"favoriteFood" => $favoriteFood, 
		];
		return $monster; 
	}

		$codey = monsterGenerator(1017, "Codey", 2, "toilet paper"); 
		$lima = monsterGenerator(1256, "Limabean", 2, "toilet paper"); 
		$reads = monsterGenerator(764, "Miss Reads-A-Lot", 2, "toilet paper"); 
		$fragoo = monsterGenerator(9320, "Fragoo", 2, "toilet paper"); 
		$mrBanana = monsterGenerator(5622, "Mr. Banana", 2, "toilet paper"); 
		$orangina = monsterGenerator(5622, "Orangina", 2, "toilet paper"); 
		$shadow = monsterGenerator(5622, "Shadow", 2, "toilet paper"); 
	

	$monsters = [$codey, $lima, $reads, $fragoo, $mrBanana, $orangina, $shadow];

	?>
	<ul class='monster-list'>

	<?php foreach($monsters as $monster) { ?>
		<li>
			<monster-card>
				<p class='id'><?=$monster["id"]?></p>

				<h2 class='name'><?=$monster["name"]?></h2>

				<p class='age'><?=$monster["age"]?></p>

				<p class='food'><?=$monster["favoriteFood"]?></p>
			</monster-card>
		</li>

	<?php } ?>

</ul>






