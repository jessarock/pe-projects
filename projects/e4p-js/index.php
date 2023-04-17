
	
	<?php include('functions.php'); ?>
	
	<?php include('header.php'); ?>




			<section class='' id='e4p-js'>
			<inner-column>

				<?php 

					$currentPage = $_GET["page"];

					if ($currentPage == "hello") {
						include('templates/pages/saying-hello/hello.php');
					}
					if ($currentPage == "counting-characters") {
						include('templates/pages/counting-characters/counting-characters.php');
					}	
					if ($currentPage == "simple-math") {
						include('templates/pages/simple-math/simple-math.php');
					} 
					if ($currentPage == "retirement") {
						include('templates/pages/retirement/retirement.php');
					}
					if ($currentPage == "paint") {
						include('templates/pages/paint/paint.php');
					}
					if ($currentPage == "area") {
						include('templates/pages/area/area.php');
					}
					if ($currentPage == "pizza-party") {
						include('templates/pages/pizza-party/pizza-party.php');
					}
				
				?>


			</inner-column>
			</section>


	<?php include('footer.php'); ?>