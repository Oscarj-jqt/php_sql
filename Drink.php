<?php 

// abstract class Drink 

    class Drink implements IDrink {

        private string $name;

        private int $basePrice;

        public function getPrice(): float {
            return $this->basePrice;
        }

        public function display(): void {
            echo "{$this->name} : {$this->getPrice()}€\n";
        }

        public function __construct(string $name, int $basePrice) {
            $this->name = $name;
            $this->basePrice = $basePrice;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getBasePrice(): int {
            return $this->basePrice;
        }
    }