


<?php 

$Codey = [
	"id" => 1017,
	"name" => "Codey",
	"favoriteFood" => "toilet paper",
	"age" => 2,
	"adopted" => true,
	"portrait" => "images/codey.jpg",
];

$Lima = [
	"id" => 1256, 
	"name" => "Limabean",
	"favoriteFood" => "lima beans",
	"age" => 2, 
	"adopted" => false,
	"portrait" => "images/limabean.jpg",
];

$Reads = [
	"id" => 764, 
	"name" => "Miss Reads-A-Lot",
	"favoriteFood" => "madeline cookies and tea",
	"age" => 9, 
	"adopted" => false,
	"portrait" => "images/miss-reads-a-lot.jpg",
];

$Fragoo = [
	"id" => 9320,
	"name" => "Fragoo",
	"favoriteFood" => "croissants",
	"age" => 7, 
	"adopted" => false, 
	"portrait" => "images/fragoo.jpg",
];

$MrBanana = [
	"id" => 5622,
	"name" => "Mr. Banana",
	"favoriteFood" => "garbage",
	"age" => 3, 
	"adopted" => true, 
	"portrait" => "images/mr-banana.jpg",
];

$Orangina = [
	"id" => 387,
	"name" => "Orangina",
	"favoriteFood" => "carrots",
	"age" => 6, 
	"adopted" => true, 
	"portrait" => "images/orangina.jpg",
];

$Shadow = [
	"id" => 1152,
	"name" => "Shadow",
	"favoriteFood" => "oreos",
	"age" => 12, 
	"adopted" => false, 
	"portrait" => "images/shadow.jpg",
];

$monsters = [$Codey, $Lima, $Reads, $Fragoo, $MrBanana, $Orangina, $Shadow];

echo "<ol>";

foreach($monsters as $monster) {
	$id = $monster["id"];
	$name = $monster["name"];
	$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old.";
	$portrait = $monster["portrait"];
	$status = $monster["adopted"];

	if ($status == 1) {
		$status = "Adopted!";
		} else {
			$status = "Needs a home!";
		}
	


	echo "<li class='monster'>";

	echo 
		"<monster-card id='" . $id .  "'>" . 
			"<picture class='portrait'>" . 
				"<img src='" . $portrait . "' ></picture>" . 
			  "<div class='monster-content'><h2 class='name'>" . $name . "</h2>" .

			  "<p class='story'>" . $story . "</p>" . 

			  "<p class='status'><a href='#'>" . $status . "</a></p></div>" .

		"</monster-card>";

	echo "</li>";

};

echo "</ol>";

?>