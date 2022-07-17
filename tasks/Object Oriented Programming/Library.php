<?php
class Mammal{}
class Library
{
    public $name;
    public $romance = array();
    public $scienceFiction = array();
    public $motivation = array();
    public $location = array();

    public function __construct($name,$location)
    {
        $this->name=$name;
        $this->location=$location;
    }

    public function addBook(Books $book){ // THis means $books must be an instance of Books
        if($book->category === 'romance'){
            array_push($this->romance,$book);
        }
        else if($book->category === 'motivation'){
            array_push($this->motivation,$book);
        }
        else if($book->category === 'science'){
            array_push($this->scienceFiction,$book);
        }
    }

    public function print(){
        //Print all From Romance
        foreach ($this->romance as $book) {
            echo "<p>Name of Book: {$book->title}</p>";
        }
        foreach ($this->motivation as $book) {
            echo "<p>Name of Book: {$book->title}</p>";
        }
        foreach ($this->scienceFiction as $book) {
            echo "<p>Name of Book: {$book->title}</p>";
        }
    }

}

class Books {
    public $title;
    public $Isbn;
    public $year;
    public $author;
    public $category;

    public function __construct($title, $Isbn, $year, $author, $category)
    {
        $this->title = $title;
        $this->Isbn = $Isbn;
        $this->year = $year;
        $this->author = $author;
        $this->category = $category;
    }




}



class ScienceFiction extends Books {}
class Romance extends Books {}
class Motivation extends Books {}


