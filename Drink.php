<?php 

// abstract class Drink 

    class Drink {

        private string $name;

        private int $basePrice;

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