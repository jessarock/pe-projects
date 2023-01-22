<!doctype html>

<?php require("router.php"); ?>

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
				<?php getTemplate($page); ?>
			</inner-column>
		</main>
	
	</body>
	
</html>
