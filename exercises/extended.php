<?php

declare(strict_types=1);

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

class Beverage{

    public string $name;
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct(string $name, string $color, float $price){
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
    }
    public function getInfo() : string{
        return "this beverage is a $this->name , costs $this->price euro and has a $this->color color, usually served $this->temperature";
    }

}

class Beer extends Beverage {

    public float $alcoholPercentage;

    public function __construct(string $name, string $color, float $price, float $alcoholPercentage){
        parent::__construct( $name,  $color,  $price);
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage() : float {
        return $this->alcoholPercentage;
    }

}


$cola = new Beverage('Cola', 'black', 2);
echo $cola->getInfo()."<br>";

$caraPils = new Beer('caraPils', 'blond', 0.60, 4.4);
echo $caraPils->getInfo()."<br>";

echo $caraPils->getAlcoholPercentage();
echo $caraPils->alcoholPercentage;


