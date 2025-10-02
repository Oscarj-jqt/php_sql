<?php

// we use a abstract class so each option can implement its own pricing logic
abstract class Option {
    private string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public abstract function getPrice(Car $car) : float;
}