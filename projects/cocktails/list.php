<?php include("cocktail-data.php"); ?>


<h1>Cocktail List</h1>

<ul>
	<?php foreach ($cocktail_data as $cocktail) { ?>
		<li class="cocktail">
			<cocktail-card>
				<h2 class="name">Name: <?=$cocktail["name"]?></h2>
				<h3 class="liquor">Base Liquor: <?=$cocktail["liquor"]?></h3>
				<h4 class="glass">Glassware: <?=$cocktail["glass"]?></h4>
				<a href="?page=detail&cocktail=<?=$cocktail["id"]?>">detail page</a>
			</cocktail-card>
		</li>
	<?php } ?>	
</ul>