<!doctype html>

<?php 
/* router */

$page = null; 

if (isset($_GET["page"]) ) {
	$page = $_GET["page"]; 
} else 
	$page="home"; 

?>

<html lang="en">

	<?php include("head.php"); ?>

<body>
	
		<header>
			<inner-column>

				<?php include('site-menu.php'); ?>

			</inner-column>
		</header>
	
		<main>
			<inner-column>
				<?php 
					if ($page == "home") {
						include("home.php");
					}
					if ($page == "list") {
						include("list.php");
					}
					if ($page == "detail") {
						include("detail.php");
					}
				?>	
			</inner-column>
		</main>
	
	</body>
	
</html>
