


<?php

	$pageData = getData("data/pages/home.json");

	formatCode($pageData);

	?>



<section>
	<inner-column>
		<h1 class="loud-voice"><?=$pageData["heading"]?></h1>

		<h2><?=$pageData["sections[0]"]?></h2>
	</inner-column>
</section>