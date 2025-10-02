<?php

// Option for a automatic transmission car (+10% of the car price)
class AutoGearBox extends Option {
    public function __construct(){

        parent::__construct("Automatique");
    }

    public function getPrice(Car $car) : float {
        return $car->getPrice() * 0.1;
    }
}