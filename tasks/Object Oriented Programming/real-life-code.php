<?php
require('./Library.php');

// Create some books
//Romance Books
$romanceBook1 = new Romance("Fault in all stairs","R123","2022","Scott Pilgrim", "romance");

$romance = new Romance("Pretty lady", "R245", "2013",  "Richard Gere","romance");

// Motivation
$motivation = new Motivation("Atomic Habits","2345","2022", "James Clear", "motivation");

// Science Fiction
$sciFi = new ScienceFiction("Star Wars","R245","2022","George Lucas","science");



$Library = new Library("Lagos Yaba Library", "Nigeria");


$Library->addBook($romanceBook1);
$Library->addBook($romance);
$Library->addBook($sciFi);
$Library->addBook($motivation);

// Print all books
$Library->print();
