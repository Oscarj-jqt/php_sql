<?php

class CartProduct{

	private Product $product;
	private int $quantity;

	public function __construct( Product $product, int $quantity){
		$this->quantity = $quantity;
		$this->product = $product;
	}

	public function getProductId() : int {
		return $this->product->getId();
	}

	public function getName() : string {
		return $this->product->getName();
	}

	public function getPrice() : float {
		return $this->product->getPrice() * $this->quantity;
	}
}