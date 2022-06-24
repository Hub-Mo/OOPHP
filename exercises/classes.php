<?php
declare(strict_types=1);


//class
class Beverage{

    //properties
    public string $name;
    public string $color;
    public float $price;
    public string $temperature;

    //cunstructor
    public function __construct(string $name, string $color, float $price){
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
    }
    // method/getter, this gets the properties and puts them in the string and the method return that string.
    public function getInfo() : string{
        return "this beverage is a $this->name , costs $this->price euro and has a $this->color color.";
    }

}
// instantiating a class
$cola = new Beverage('Cola', 'black', 2);
// calling the getter thats inside the cola object wich we made from the beverage class.
echo $cola->getInfo();


