<?php 

class User{
	private Cart $cart;

	public function __construct(){
		$this->cart = new Cart();
	}

	public function addToCart($productId, $quantity ){
		$this->cart->addProduct($productId, $quantity);
	}

	public function getCart() : Cart {
		return $this->cart;
	}
}