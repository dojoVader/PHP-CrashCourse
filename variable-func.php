<?php

// variable functions

function helloWorld()
{
    return 'Hello World';
}

function uppercase($words)
{
    return strtoupper($words);
}

function flip($words)
{
    return strrev($words);
}

// First change to lower case then first letter uppercase
function firstChar($word)
{
    return ucfirst(strtolower($word)); // ucfirst(string returned from strtolower)
}

function replace($word)
{
    return str_replace('Abba', 'Bee Gees', $word);
}

// Vairable function
$copyOfFunction = 'helloWorld';
//echo $copyOfFunction();

$funcList = ['uppercase', 'flip', 'firstChar', 'replace', 'buhari'];
$input = 'An example of a palindrome is ABBA';

// Callback/Callable is a function that can be
 foreach ($funcList as $function) {
     $func = $function;
     // If the function is valid or exists then we can run it
     if (function_exists($func)) {
         // $input = call_user_func($func, $input); // uppercase(r) //flip(r)

         $input = $func($func, $input);
     }
 }
 var_dump($funcList);
