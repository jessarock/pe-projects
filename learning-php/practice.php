<html> 

	<body>

		<h1> arrays & objects </h1>

		<?php
			//objets aka associative arrays
			$oyster = [
				"name" => "oyster shell",
				"material" => "solid",
				"size" => 3, 
				"shape" => "ovular",
				"color" => "gray",
				"texture" => "flaky", 
				"function" => "protection",
			];

			echo "<p> This " . $oyster["name"] . " is " . $oyster["texture"] . " and " . $oyster["shape"] . ".</p";

			//arrays

			$arrayPractice = ["Jess", "brown hair", 35, "medium height"];



			echo "<p> My name is " . $arrayPractice[0] . ".</p>";
			echo "<p>" . $arrayPractice[0] . " has " . $arrayPractice[1] . " and is " . $arrayPractice[2] . " years old.</p>";



			print_r($arrayPractice);

			echo "hi";

$myArray = ["dog", "terrier mix", 4, "one",  "barks a lot", "loves the snow", 40, true, false];

echo "<p> I have " . $myArray[3] . " " . $myArray[0] . ".</p>";


		?>

		$Otis = [
	"id" => 1017,
	"name" => "Otis",
	"favoriteFood" => "toilet paper",
	"age" => 4,
	"adopted?" => true
];

$story = $Otis["name"] . " is " . $Otis["age"] . " years old and his favorite food is " . $Otis["favoriteFood"] . ".";

$template = "<p id=" . $Otis["id"] . ">" . $story . "</p>";

echo $template; 

$fruits = [apple, banana, grape, blueberry, raspberry]; 

echo "<ol>";

foreach($fruits as $fruit) {
	echo "<li>" . $fruit . "</li>";
}

echo "</ol>"; 
	
	</body>

</html>

