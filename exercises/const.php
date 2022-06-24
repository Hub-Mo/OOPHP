<?php

declare(strict_types=1);

/* EXERCISE 6
Copy the classes of exercise 2.
TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.
Use typehinting everywhere!
*/

class Beverage{

    private string $name;
    private string $color;
    private float $price;
    private string $temperature;
    private const BARNAME = "Het Vervolg";
    public function __construct(string $name, string $color, float $price){
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
        $this->barName = BARNAME;
    }
    public function getInfo() : string{
        return "this beverage is a $this->name , costs $this->price euro and has a $this->color color, usually served $this->temperature";
    }
    public function showBarName() : string{
        return $this->barName;
    }

}

class Beer extends Beverage {

    private float $alcoholPercentage;

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