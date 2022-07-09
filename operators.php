
<?php
// Examples for operators

$a = 5; // Assignment

$b = null;

$booleanFlag = 0;
$booleanFlag2 = 1;

$male = "Remi";
$female = "pochantas";

$sum = $a + $b; // + is the operator and $a and b are the operands.

$diff = $b - $a; // Arithmetic



$multiply = $a * $b; // $a = $a + 1

echo ($a > $b) ? "Greater" : "Not greater";

if( $a > $b){
	echo "greater";
}
else{
	echo "Not greater";
}
//True and Truthy

// True 1 or 0
//Truthy is something that can evaluated to true or false

if($a && $b){
	echo "Both Present";
}else{
	echo "Both not present";
}

if($booleanFlag && $booleanFlag2){
	echo "Both flags are true";
}

if($booleanFlag || $booleanFlag2){
	echo "One was turned on";
}

$wedding = $male. " weds ".$female;

print $wedding;
?>

