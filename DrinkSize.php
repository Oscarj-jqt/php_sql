<?php 

    class DrinkSize {
        private Drink $drink;

        private string $size;

        public function __construct(Drink $drink, string $size) {
            $this->drink = $drink;
            $this->size = $size;
        }

        public function getPrice(): float {
            $prices = [
            'Café' => ['S' => 1, 'M' => 1.5, 'L' => 2],
            'Thé' => ['S' => 2, 'M' => 2.5, 'L' => 3],
            'Mocha' => ['S' => 5, 'M' => 6.5, 'L' => 7.5],
            'Chocolat chaud' => ['S' => 3, 'M' => 4, 'L' => 5],
            ];

            return $prices[$this->drink->getName()][$this->size] ?? 0;
        }

        public function display(): void {
            echo "{$this->drink->getName()} ({$this->size}) : {$this->getPrice()}€\n";
        }

    }