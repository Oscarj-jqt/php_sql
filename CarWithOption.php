<?php 

// class doing a link between a car and its options so the car can have multiple options (or none)
class CarWithOption {
    private Car $car;
    private array $options=[];

    public function __construct(Car $car) {
        $this->car = $car;
    }

    public function addOption(Option $option): void {
        $this->options[] = $option;
    }

    public function removeOption(Option $option): void {
        $this->options = array_filter($this->options, fn($o) => $o !== $option);
    }

    public function getTotalPrice(): float {
        $total = $this->car->getInitialPrice();
        foreach ($this->options as $option) {
            $total += $option->getPrice($this->car);
        }
        return $total;
    }
    public function display(): void {
        $this->car->display();
        echo "Options:\n";
        foreach ($this->options as $option) {
            $option->display($this->car);
        }
        echo "Prix total : {$this->getTotalPrice()}€\n";
    }
}
