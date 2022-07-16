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




