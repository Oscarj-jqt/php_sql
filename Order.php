<?php

class Order {
    private static int $nextId = 1;
    private int $id;
    private array $drinks = [];

    public function __construct() {
        $this->id = self::$nextId++;
    }


    // add a drink with size to the order
    public function addDrink(DrinkSize $drinkSize): void {
        $this->drinks[] = $drinkSize;
    }

    public function getTotalPrice(): float {
        $total = 0;
        foreach ($this->drinks as $drinkSize) {
            $total += $drinkSize->getPrice();
        }
        return $total;
    }

    public function display(): void {
        echo "Commande #{$this->id} :\n";
        foreach ($this->drinks as $drinkSize) {
            $drinkSize->display();
        }
        echo "Total : {$this->getTotalPrice()}€\n";
    }
}