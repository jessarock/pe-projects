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
				<h1>cocktails</h1>

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
				?>	
			</inner-column>
		</main>
	
	</body>
	
</html>
