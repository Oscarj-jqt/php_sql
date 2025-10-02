<?php 

class ABS extends Option {
    public function __construct(){
        parent::__construct("ABS");
    }

    public function getPrice(Car $car) : float {
        return 3000;
    }
}