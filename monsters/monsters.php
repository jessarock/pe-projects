<?php include("monster-factory.php"); ?>

<ol class='monster-list'>

<?php foreach($monsters as $monster) { ?>
	<?php
		$id = $monster["id"];
		$name = $monster["name"];
		$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old.";
		$portrait = $monster["portrait"];
		$status = $monster["adopted"];


		if ($status == 1) {
			$status = "Adopted!";
			} else {
				$status = "Needs a home!";
			}	
	?>		
	
		<li class='monster'>
			<monster-card id='<?=$id?>'>
				<picture class='portrait'>
					<img src='<?=$portrait?>'>	
				</picture>
				<div class='monster-content'>
					<h2 class='name'><?=$name?></h2>

					<p class='story'><?=$story?></p>

					<p class='status'><a href='#'><?=$status?></a></p>
				</div>
			</monster-card>
		</li>

	<?php } ?>	

</ol>


