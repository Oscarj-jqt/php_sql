<?php       

class Car 
{
    private string $name;
    private float $price;
    private array $options;

    public function __construct(string $name, float $price){
        $this->name = $name;
        $this->price = $price;
        $this->options = [];
    }

    public function addOption( Option $option ) : void {
        $this->options[] = $option;
    }

    public function getPrice() : float {
        return $this->price;
    }

    public function getTotalPrice() : float {
        $price = $this->price;
        foreach($this->options as $option){
            $price += $option->getPrice($this);
        }
        return $price;
    }
}
