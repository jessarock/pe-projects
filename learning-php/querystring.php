<!doctype html>

<?php

	/* router */	
	$page = null; 
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"]; // url?page=string
	} else {
		$page = "home"; // default
	}
?>

<html lang='en'>
	
	<head>
		<meta charset='utf-8'>
		<title><?=$page?></title>
		<!---META-->
	</head>

	<body>

		<header>
			<?php include("site-menu.php"); ?>
		</header>

		<main>
			<?php 
				if ($page == "home") {
					include("home.php");
				}
				if ($page == "list") {
					include("list.php");
				}
			?>
		</main>

	</body>


</html>