<?php

class Cart 
{
	private int $id;
	private array $products;

	public function __construct(){
		$this->products = [];
		$this->id = 0;
	}

	public function addProduct( Product $product , int $quantity ){
		$this->products[] = new CartProduct( $product , $quantity ) ;
	}

	public function removeProduct( Product $product ) {
		foreach( $this->products as $index => $cartProduct ) {
			if ( $cartProduct->getProductId() == $product->getId()){
				unset($this->products[$index]);
			}
		}
	}

	public function getTotalPrice() : float {
		$total = 0;
		foreach($this->products as $productCart){
			$total += $productCart->getPrice();
		}

		return $total;
	}

	public function display() : void {
		foreach( $this->products as $cartProduct ){
			echo "<p> {$cartProduct->getName()} : {$cartProduct->getPrice()}";
		}

		echo "<p> {$this->getTotalPrice()} </p>";
	}
}