
<html>

<head> 
	<style>
	</style>
</head>


	<body>

		<?php
			$noun = "dog";
			$pluralNounOne = "martinis";
			$verbOne = "dance";
			$verbTwo = "snooze";
			$bodyPart = "armpit";
			$adjectiveOne = "lively";
			$adjectiveTwo = "obnoxious";
			$pluralNounTwo = "cats";

		 	echo "<p>Today, every student has a computer small enough to fit into their " . $noun . ". You can solve any math problem by simply pushing the computer’s little " . $pluralNounOne . ".

		 		<br>
		 		<br>

		 		Computers can add, multiply, divide, and " . $verbOne . ". They can also " . $verbTwo . " better than a human.

		 		<br>
		 		<br>

		 		Some computers have their own " . $bodyPart . ". Other's have a " . $adjectiveOne . "screen that shows all kinds of " . $pluralNoun . "and " . $adjectiveTwo . " figures.

		 		<hr></p>"

			

		?>

		<p>Today, every student has a computer small enough to fit into their <?= $noun ?>. You can solve any math problem by simply pushing the computer’s little <?= $pluralNounOne ?>.</p>

		<p>Computers can add, multiply, divide, and <?= $verbOne ?>. They can also <?= $verbTwo ?> better than a human.</p>

		<p>Some computers have their own <?= $bodyPart ?>. Other’s have a <?= $adjectiveOne ?> screen that shows all kinds of <?= $pluralNounTwo ?> and <?= $adjectiveTwo ?> figures.</p>

		<hr>

		<p>Today, every student has a computer small enough to fit into their <?php echo $noun; ?>. You can solve any math problem by simply pushing the computer’s little <?php echo $pluralNounOne; ?>.</p>

		<p>Computers can add, multiply, divide, and <?php echo $verbOne; ?>. They can also <?php echo $verbTwo; ?> better than a human.</p>

		<p>Some computers have their own <?php echo $bodyPart ?>. Other’s have a <?php  echo $adjectiveOne; ?> screen that shows all kinds of <?php  echo $pluralNounTwo; ?> and <?php echo $adjectiveTwo; ?> figures.</p>

		<hr>





	</body>
 


	</html>