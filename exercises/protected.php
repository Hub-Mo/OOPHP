<?php

declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

class Beverage{

    protected string $name;
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(string $name, string $color, float $price){
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
    }
    public function getInfo() : string{
        return "this beverage is a $this->name , costs $this->price euro and has a $this->color color, usually served $this->temperature";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

}

class Beer extends Beverage {

    protected float $alcoholPercentage;

    public function __construct(string $name, string $color, float $price, float $alcoholPercentage){
        parent::__construct( $name,  $color,  $price);
        $this->alcoholPercentage = $alcoholPercentage;
        $this->name = $name;
        $this->color = $color;
    }

    public function getAlcoholPercentage() : float {
        return $this->alcoholPercentage;
    }

    public function getDuvelInfo() : string {
        return "Hi i'm $this->name and have an alcochol percentage of $this->alcoholPercentage and I have a $this->color color.";
    }

}


$cola = new Beverage('Cola', 'black', 2);
echo $cola->getInfo()."<br>";

$caraPils = new Beer('Duvel', 'light', 3.5, 8.5);
echo $caraPils->getInfo()."<br>";
echo $caraPils->getAlcoholPercentage();
echo $caraPils->getDuvelInfo();
