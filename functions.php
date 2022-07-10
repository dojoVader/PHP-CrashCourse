<?php 
// Introduction to Functions in PHP

// Say the name and the age of a person
function person($name,$age){
	echo '<p>My name is <i>'.$name.'</i> and I am  <strong>'.$age.'</strong> years old</p>';
}

// echo person("Remi", 50);
// echo person('Blessing', 19);
// echo person('Mr Henry', 45); 

//Advantages of functions

//reusability
$namesList = array("Remi", "Blessing", "Mr Henry");

foreach ($namesList as $name) {
	echo person($name,rand(25,50));
}

// Counts the character length and reject if more than 200

//& This points to the address where the word is stored internally
function countCharacter($words){
	$words = "Hello this argument is passed by copy,
	so it doesn't affect the original variable";

	$length = strlen($words);
	if($length > 200){
		echo 'You have exceeded the Maximum Character, current count('.$length.') , required length should be 200';
	}else{
		echo '<p>'.$words.'</p>';
	}
}

$sampleText = "s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$sampleTextFit = "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin ambassado";

countCharacter($sampleTextFit);
countCharacter($sampleText);

function debug($msg){
	echo '<pre>'.$msg.'</pre>';
}

debug($sampleText);
debug($sampleTextFit);

// Default argument
// This sets a default argument for the function if the argument is not passed to the function
function country($where = 'Nigeria'){ 
	echo '<p>My country is '.$where.'</p>';
}

country('Afghanistan');
country('Mexico');
country('Cameroon');
country();





?>
