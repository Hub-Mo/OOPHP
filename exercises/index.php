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

if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'classes' :
            require 'classes.php';
            break;
        case 'extended' :
            require 'extended.php';
            break;
        case 'private':
            require 'private.php';
            break;
        case 'protected':
            require 'protected.php';
            break;
        case 'public':
            require 'public.php';
            break;
        case 'const':
            require 'const.php';
            break;
        case 'static':
            require 'static.php';
            break;
    }
}


?>
<form action="index.php" method="get">
    <button type="page" class="btn" name="page" value="classes"> classes </button>
    <button type="page" class="btn" name="page" value="extended"> extended </button>
    <button type="page" class="btn" name="page" value="private"> private </button>
    <button type="page" class="btn" name="page" value="public"> public </button>
    <button type="page" class="btn" name="page" value="const"> const </button>
    <button type="page" class="btn" name="page" value="protected"> protected </button>
    <button type="page" class="btn" name="page" value="static"> static </button>

</form>