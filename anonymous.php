<?php

$search = 'Blessing';

$helloWorld = function ($text) {
    echo $text;
};

$helloWorldToo = fn ($text) => ($text);

function helloWorld($text)
{
    echo $text;
}

function replaceLogic($matches)
{
    $searchText = $matches[0];
    if ($searchText === 'Remi') {
        // Assume Remi's info in the DB is single
        return 'Mr Remi';
    } elseif ($searchText === 'David') {
        return 'Mr David';
    } elseif ($searchText === 'Blessing') {
        return 'Goddess of Wealth';
    }
}

$helloWorld('Hi , my name is..........');

// Anonymous Functions
preg_replace_callback('|Blessing|', function ($matches) {
    $searchText = $matches[0];
    if ($searchText === 'Remi') {
        // Assume Remi's info in the DB is single
        return 'Mr Remi';
    } elseif ($searchText === 'David') {
        return 'Mr David';
    } elseif ($searchText === 'Blessing') {
        return 'Goddess of Wealth';
    }
}, $search);

// Function
$result = preg_replace_callback('|Blessing|', 'replaceLogic', $search);

echo $helloWorldToo('Slim Shady');
