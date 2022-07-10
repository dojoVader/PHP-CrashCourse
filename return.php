<?php
// Func returns value
function countChars($character){
    return strlen($character);
}
// Function is void
function debug($character){
    echo "<p>The character is ".$character."</p>";
}

// Value contains the returned values
$value = countChars("Hi my name is Okeowo Aderemi");

$val = debug("I love George Micheal");

print $value;

print $val;

?>