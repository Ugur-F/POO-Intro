<?php

    declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/

class beverage {

    
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct($color, $price, $temperature = "cold") {

        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    
    public function getInfo() {
        return "This beverage is {$this->temperature}, {$this->color} and cost {$this->price} €.<br>";
    }

}

$coca = new beverage("black", 2.00, "cold");

echo $coca->getInfo() . "<br>";


/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

class beer extends beverage {
    public $name;
    public $alcoholPercentage;
    public $alcoholUnit;


    public function __construct(string $name, float $alcoholPercentage, float $alcoholUnit, string $color, float $price, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        $this->alcoholUnit = $alcoholUnit;
    }

    public function getAlcoholPercentage() {
        return "The alcohol percentage of this beverage is {$this->alcoholPercentage} %.<br>" . $this->getInfo();
    }

    public function getAlcoholUnit() {
        return "The amount of alcohol unit for a {$this->name} is {$this->alcoholUnit}.<br>";
    }

    public function getColor() {
        return "Duvel is a {$this->color} beer.";
    }

}

$duvel = new Beer("Duvel", 8.5, 2.2, "blond", 3.5, "cold");


echo $duvel->getAlcoholPercentage();
echo $duvel->getAlcoholUnit();
