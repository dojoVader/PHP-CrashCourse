<?php 
// Code goes here
  $name = "Okeowo Aderemikjhgekjhjhej"; 
  $age = 14; // Number
  $gender = 'F'; // Literal Character

  $votingAge = 18;

  $grade = 'I';

  $counter = 10;

  define('WP_DEBUG',"DEBUG");

//IF 
  if($age < $votingAge){
  	print("Scammer, You are not eligible to vote");
  }else{
  	print(" you are eligible to vote");
  }

// NORTH
  if($age < $votingAge && $gender !== 'M'){
  	echo 'You are not eligible to vote due to sexist reasons.';
  }else{
  	echo 'You can vote';
  }

  if($grade === 'A'){
  	echo "Perfect";
  }
  elseif($grade === 'B'){
  	echo "Not Bad";
  }
  elseif($grade === 'C'){
  	echo 'Casual';
  }
  elseif ($grade === 'D') {
  	echo 'Let my people go';
  }
  else{
  	echo 'Failure';
  }

  while($counter !== 0){
  	print "<p>Counter:[".$counter."]</p>";
  	echo "<p>Error try again !</p>";
  	$counter = $counter - 1;
  }

  $count = 6;
  $mid = $count / 2;

// The middle expression is the condition for running.
  for($idx = 0; $idx <= $count;$idx++){
  	if($idx === $mid){
  		continue; // Don't run this current item in the loop, skip to the next
  	}
  	print '<p>Current Count '.$idx." / ".$count."</p>";
  }

 // Break terminates a loop 
 
 //Concatenation

 switch($grade){
 	case 'A':
 		echo 'Switch A';
 		break;
 	case 'B':
 		echo "Switch B";
 		break;
 	case 'C':
 		echo "Switch C";
 		break;
 	case 'D':
 		echo "Switch D";
 		break;
 	case 'E':
 		echo "Switch E";
 		break;
 	case 'F':
 	case 'G':
 	case 'H':
 		echo "F or G or H";
 		break;	

 	default:
 		echo "Invalid Grade";
 		break;
 }

 // Return
 function sayMyName($name){
 	return "My name is ".$name;
 }

 $data = sayMyName("Buhari");

 echo $data;

 echo WP_DEBUG;
?>


