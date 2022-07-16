<?php

// Func returns value
function countChars($character)
{
    return strlen($character);
}
// Function is void
function debug($character)
{
    echo '<p>The character is '.$character.'</p>';
}

// Value contains the returned values
$value = countChars('Hi my name is Okeowo Aderemi');

$val = debug('I love George Micheal');

echo $value;

echo $val;

function sayName($input)
{
    return $input;
}
// Return statement returns the value in the function to be copied by a variable
$d = sayName('Joke');
var_dump($d);
 as