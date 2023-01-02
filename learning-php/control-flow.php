<html>

	<body>

		<h1>control flow </h1>

		<?php
			//is it your birthday

			$date = date("m.d."); 
			$birthdate = "12.30";

			if ($date == $birthdate) {
				echo "Happy Birthday to you!";
			} else {
				echo "Happy birthday to someone else!";
			}		

			echo "<br>";
			echo "<br>";

			//what are you cooking

			$meal = "poultry";
			
			if ($meal) {
				echo "Get that cooked to 165°.";
			} else {
				echo "What are you waiting for? Get to cookin' some delicious food!";
			}

			echo "<br>";
			echo "<br>";

			//do you qualify for free shipping

			$totalSpent = 90;
			$freeShipping = 100;
			$shippingCost = 10;
		

			if ($totalSpent < $freeShipping) {
				echo "You do not qualify for free shipping.";
			} elseif ($totalSpent >= $freeShipping) {
				echo "You qualify for free shipping. Woohoo!";
			}


		?>

		
	</body>

</html>