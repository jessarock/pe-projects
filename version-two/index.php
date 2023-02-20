	<?php include('functions.php'); ?>
	
	<?php include('header.php'); ?>


			<section class='section-name' id='and-its-id'>
			<inner-column>

				<?php 

					$currentPage = $_GET["page"];

					if ($currentPage == "home") {
						include('templates/pages/welcome.php');
					}
					if ($currentPage == "about") {
						include('templates/pages/about.php');
					}	
					if ($currentPage == "contact") {
						include('templates/pages/contact.php');
					} 
					if ($currentPage == "projects") {
						include('templates/pages/projects.php');
					}
					if ($currentPage == "project") {
						include('templates/pages/project.php');
					}
				
				?>


			</inner-column>
			</section>

	<?php include('footer.php'); ?>