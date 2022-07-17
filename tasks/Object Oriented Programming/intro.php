<?php

// Introduction to OOP
class Mammals // Define the Blueprint
{
    public $numberOfLegs;
    public $numberOfEyes;
}

$mammal = new Mammals(); // Concrete instance of the class
$mammal->numberOfLegs = 4;
$mammal->numberOfEyes = 2;

class Car
{
    public $doors;
    public $tyres;
    public $name;
    public $year;
    private $engine = "Tesla V2103890202";
    protected $license = "2398728378278";

    public function __construct($name,$tyres,$doors,$year)
    {
        $this->doors = $doors;
        $this->tyres=$tyres;
        $this->name = $name;
        $this->year=$year;
    }


    public function getCarName(){
        return "<p>The name of this Car brand is <strong>{$this->name}</strong></p>";
    }

    public function getEngine(){
         return $this->engine;
    }

}

class SportCar extends Car{

}

//$toyota = new Car();
//$toyota->doors = 4;
//$toyota->tyres = 4;
//$toyota->name = 'Toyota';
//$toyota->year = '2012';
//
//$nissan = new Car();
//$nissan->doors = 4;
//$nissan->tyres = 4;
//$nissan->name = 'Nissan';
//$nissan->year = '2012';
//
//$sportcar = new SportCar();
//$sportcar->name = "Mclaren";
//$sportcar->tyres = 4;
//$sportcar->doors = 2;
//$sportcar->year = '2019';

$benz = new Car("Mercedes Benz",4,4,'2012');
$lexus = new Car("Lexus",4,4,'2014');
$porsche = new SportCar('Porsche GT',4,2,'2022');

function printCarName($carObject){
    if($carObject instanceof Car){
        var_dump($carObject->getCarName());
    }else{
        echo "(".get_class($carObject).") is not an instance of Car";
    }

}

echo $benz->getCarName();
echo $lexus->getCarName();
echo $porsche->getCarName();

class Members {
    public $name;
    public $age;
    public $gender;
    public $role;
    public Car $car;

    public function __construct($name,$age,$gender,$role,Car $car){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->role = $role;
        $this->car = $car;
    }

    public function getVechicle(){
        return $this->car->getCarName();
    }

    public function getInformation(){
        return "<p>I am {$this->name}, I am {$this->age} years old and I am {$this->gender} by gender and also a/an {$this->role}</p>";
    }
    // When the page has finished running a __destruct is called
    // When it is set to null or delete
    public function __destruct()
    {
      var_dump("Page has been destroyed: {$this->name}");
    }
}

// Constructors
$Instructor = new Members("Okeowo Aderemi", 24, "Female","Instructor",$lexus);

$Blessing = new Members("Goddess of Wealth", 20,  "Female","Student",$benz);
 // $Instructor no longer points to Member Class
// Garbage Collector = Checks for empty variables and frees the memory

echo $Instructor->getInformation();
echo $Blessing->getInformation();
echo $Blessing->getVechicle();








