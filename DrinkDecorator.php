<?php

abstract class DrinkDecorator implements IDrink {
    protected IDrink $drink;

    public function __construct(IDrink $drink) {
        $this->drink = $drink;
    }

    abstract public function getPrice(): float;

    abstract public function display(): void;
}