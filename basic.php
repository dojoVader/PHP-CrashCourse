<?php 
  // Welcome to PHP
  ini_set("error_reporting",E_ALL);
  ini_set("display_errors",1);

  // What are variables ? 

  $name = "Okeowo Aderemikjhgekjhjhej"; // String
  $age = 2444; // Number
  $gender = 'M'; // Literal Character
  $name = $age;



  echo ("My name is ".$name." and my age is ".$age." and my Gender is '".$gender."'");

  // Array
  $studentList = ["Remi","Tayo","Blessing","David"];

  foreach($studentList as $student){
  	echo ("<p>".$student."</p>");
  }
?>
