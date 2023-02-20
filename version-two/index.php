	<?php include('functions.php'); ?>
	
	<?php include('header.php'); ?>


			<section class='section-name' id='and-its-id'>
			<inner-column>

				<?php 

					$currentPage = $_GET["page"];

					if ($currentPage == "home") {
						echo "<h1>welcome</h1>";
					}
					if ($currentPage == "about") {
						echo "<h1>something about me</h1>";
					}	
					if ($currentPage == "contact") {
						echo "<h1>contact me</h1>";
					} 
				


				?>


			</inner-column>
			</section>

	<?php include('footer.php'); ?>