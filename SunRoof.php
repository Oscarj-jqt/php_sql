<?php  

// Option for a sun roof (+10% + 5000€ of the car price)

class SunRoof extends Option {
    public function __construct(){

        parent::__construct("Toit ouvrant");
    }

    public function getPrice(Car $car) : float {
        return $car->getPrice() * 0.1 + 5000;
    }
}

