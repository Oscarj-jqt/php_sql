<?php

require_once "Car.php";
require_once "Option.php";
require_once "CarWithOption.php";
require_once "ABS.php";
require_once "AutoGearBox.php";
require_once "SunRoof.php";

// Car instanciation with factory



$bmw = CarFactory::createBMW();
echo $bmw->getTotalPrice();

class CarFactory{
    public static function createBMW(){
        $car = new Car("BMW", 100000);
        $car->addOption(new ABS());
        $car->addOption(new AutoGearBox());
        $car->addOption(new SunRoof());

        return $car;
    }
}

?>