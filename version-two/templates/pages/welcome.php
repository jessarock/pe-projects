


<?php

	$pageData = getData("data/pages/home.json");

	formatCode($pageData);

	?>



<section>
	<inner-column>
		<h1 class="loud-voice"><?=$pageData["heading"]?></h1>
	</inner-column>
</section>